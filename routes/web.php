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

Route::get('cadastroFamilia', [EventController::class, 'cadastroFamilia']);

Route::get('recuperarSenha', [EventController::class, 'recuperarSenha']);

Route::get('novaSenha', [EventController::class, 'novaSenha']);



Route::get('primeiroLogin', [EventController::class, 'primeiroLogin'])->middleware('auth');

Route::get('primeiroLogin2', [EventController::class, 'primeiroLogin2'])->middleware('auth');

Route::get('normalLogin', [EventController::class, 'normalLogin'])->middleware('auth');

Route::get('profile', [EventController::class, 'profile'])->middleware('auth');

Route::get('tableMaster', [EventController::class, 'tableMaster'])->middleware('auth');

Route::get('tableSimples', [EventController::class, 'tableSimples'])->middleware('auth');

Route::get('dashboard', [EventController::class, 'dashboard'])->middleware('auth');
