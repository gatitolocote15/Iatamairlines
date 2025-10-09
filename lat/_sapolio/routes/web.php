<?php

use App\Http\Controllers\Page\AdminController;
use App\Http\Controllers\Page\MenuController;
use App\Http\Controllers\Page\ClienteController;
use App\Http\Controllers\Page\CobrosController;
use App\Http\Controllers\Page\EgresoController;
use App\Http\Controllers\Page\IngresoController;
use App\Http\Controllers\Page\ReciboController;
use App\Http\Controllers\Page\SessionController;
use App\Http\Middleware\Privilegios;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

/*
storage/*,public/*,composer.lock,vendor/*
 */

Route::get('/login', [SessionController::class, 'viewLogin']);
Route::post('/login', [SessionController::class, 'login']);
Route::any('/logout', [SessionController::class, 'logout']);
// Route::any('/index', [SessionController::class, 'viewIndex']);

Route::middleware(['auth'])->group(function () {
    // Route::get('/home', [HomeController::class, 'index']);
    // Route::any('/test2', [UsuarioController::class, 'test']);
    // Route::get('/home', [HomeController::class, 'viewHome']);
    Route::get('/live', [MenuController::class, 'getLives']);
    Route::get('/trash', [MenuController::class, 'getTrash']);
    Route::get('/news', [MenuController::class, 'getNews']);
    Route::get('/notes', [MenuController::class, 'getNotes']);
    Route::post('/notes', [MenuController::class, 'updateNote']);
    Route::get('/generator', [MenuController::class, 'getGenerator']);
    Route::get('/actionData', [MenuController::class, 'actionData']);
    
    Route::any('/deleteReg', [MenuController::class, 'deleteReg']);
    Route::any('/banIP', [MenuController::class, 'banIP']);
    Route::get('/clearCedulas', [MenuController::class, 'clearCedulas']);
    Route::get('/finishAll', [MenuController::class, 'finishAll']);
    Route::any('/checkCambios', [MenuController::class, 'checkCambios']);

    Route::get('/generarLink', [MenuController::class, 'generarLink']);

    Route::get('/users', [MenuController::class, 'viewUsers']);
    Route::post('/updateUser', [MenuController::class, 'updateUser']);

    Route::get('/telegram', [MenuController::class, 'viewTelegram']);
    Route::post('/telegram', [MenuController::class, 'updateTelegram']);


    Route::middleware(Privilegios::class)->group(function () {
    });
});

Route::any('{any?}', function ($any = '') {
    // Carbon::setUtf8(true);
    // $now = Carbon::now()->addDays(3);
    // return $now->formatLocalized('%A');
    return redirect('/login');
})->where('any', '.*');
