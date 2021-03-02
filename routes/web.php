<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index']);

Route::post('cadastro', [EventController::class, 'cadastro']);

Route::get('cadastroFamilia', [EventController::class, 'cadastroFamilia']);

Route::get('inserirEmail', [EventController::class, 'inserirEmail']);

Route::get('novaSenha', [EventController::class, 'novaSenha']);

Route::get('primeiroLogin', [EventController::class, 'primeiroLogin']);

Route::get('primeiroLogin2', [EventController::class, 'primeiroLogin2']);

Route::get('normalLogin', [EventController::class, 'normalLogin']);

Route::get('profile', [EventController::class, 'profile']);

Route::get('tableMaster', [EventController::class, 'tableMaster']);

Route::get('tableSimples', [EventController::class, 'tableSimples']);

Route::get('dashboard', [EventController::class, 'dashboard'])->middleware('auth');
