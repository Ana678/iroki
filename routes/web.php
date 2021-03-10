<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FamilyController;
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

Route::get('/', function(){
    return view('index');
});

//Testando o cadastro
Route::get('registerPadrao', function(){return view('auth.registerPadrao');});
//--------------------


Route::get('recuperarSenha', [EventController::class, 'recuperarSenha']);

Route::get('novaSenha', [EventController::class, 'novaSenha']);

Route::post('cadastro', [EventController::class, 'cadastro'])->middleware('auth');

Route::get('primeiroLogin', [EventController::class, 'primeiroLogin'])->middleware('auth');

Route::get('primeiroLogin2', [EventController::class, 'primeiroLogin2'])->middleware('auth');

Route::get('normalLogin', [EventController::class, 'normalLogin'])->middleware('auth');

Route::get('profile', [EventController::class, 'profile'])->middleware('auth');

Route::post('updateProfileImage', [EventController::class, 'updateProfileImage'])->middleware('auth');
Route::post('updateProfileData', [EventController::class, 'updateProfileData'])->middleware('auth');

Route::get('categoryDetail', [EventController::class, 'categoryDetail'])->middleware('auth');

Route::get('tableMaster', function(){
    $sessao = auth()->user();
    return view('categoryDetailM', ['sessao' => $sessao]);
});

Route::get('dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::get('cadastroMembro', [FamilyController::class, 'cadastroMembro'])->middleware('auth');