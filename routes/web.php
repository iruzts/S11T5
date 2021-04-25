<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::middleware(['auth:sanctum', 'verified'])-> get('/dash', [DashController::class, 'index']);
//Route::middleware(['auth:sanctum', 'verified'])-> get('/Usuarios', [UsuariosController::class, 'index']);
//productos
Route::middleware(['auth:sanctum', 'verified'])-> get('/create', [createController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->resource('Productos', ProductosController::class);

