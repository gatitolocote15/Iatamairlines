<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    public function __construct()
    {
        // si pongo esto chanca el controller padre, haciendo que esto solo sea valido
        // $this->middleware('auth');
        // el construct padre no se invoca a menos que se mencione con parent
        // parent::__construct();
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/login');
    }

    public function viewIndex()
    {
        if (Auth::check()) {
            return redirect('/news');
        }
        return view('index');
    }

    public function viewLogin()
    {
        if (Auth::check()) {
            return redirect('/news');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'usuario' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['action' => 'msgError', 'data' => $validator->errors()->all()]);
        }
        $usuario = (string) $request->input('usuario');
        $password = (string) $request->input('password');
        $remember = boolVal($request->input('remember', 0));

        // Verificar credenciales con MD5
        $user = \App\Models\User::where('usuario', $usuario)->first();

        if ($user && $user->password === md5($password)) {
            Auth::login($user, $remember);
            return response()->json(['action' => 'refresh', 'data' => true]);
        }

        return response()->json(['action' => 'msgError', 'data' => 'Usuario y/o contraseña incorrecta.']);
    }
}
