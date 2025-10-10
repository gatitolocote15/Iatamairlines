<?php

namespace App\Http\Controllers;

use App\CustomClass\Persona;
use App\CustomClass\Plana;
use App\CustomClass\Seccion;
use App\CustomClass\Situacion;
use App\Http\Controllers\Page\SessionController;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $myUser;
    public $authUser;
    public function __construct()
    {
        // $this->middleware(function ($request, $next) {
        //     $this->authUser = Auth::user();
        //     if ($this->authUser) {
        //         $this->myUser = $this->authUser;
        //         // return response("el user es ". get_class($this->authUser)) ;
        //         // return response()->json($this->authUser);
        //     }
        //     return $next($request);
        //     // return response("el user es ". $this->authUser) ;
        // });
    }

    protected function viewAuth($view, $params = [])
    {
        return view($view, $params);
    }
}
