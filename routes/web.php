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

Route::get('inserirEmail', function(){
    return view('auth.forgot-password');
});

Route::get('novaSenha', [EventController::class, 'novaSenha']);

Route::post('cadastro', [EventController::class, 'cadastro']);

Route::get('validacao',[EventController::class, 'validacao']);

Route::get('Login1', [EventController::class, 'Login1'])->middleware('auth');

Route::get('Login2', [EventController::class, 'Login2'])->middleware('auth');

Route::get('profile', [EventController::class, 'profile'])->middleware('auth');

Route::post('updateProfileImage', [EventController::class, 'updateProfileImage'])->middleware('auth');
Route::post('updateProfileData', [EventController::class, 'updateProfileData'])->middleware('auth');

Route::get('categoryDetail/{id}', [EventController::class, 'categoryDetail'])->middleware('auth');

Route::get('dashboard', [EventController::class, 'dashboard'])->middleware('auth');


Route::get('cadastroMembro', function(){return view('cadastroMembro');})->middleware('auth');

Route::post('cadastrarMembro', [FamilyController::class, 'cadastrarMembro'])->middleware('auth');

Route::post('updateFamilyImage', [FamilyController::class, 'updateFamilyImage'])->middleware('auth');


Route::post('addProduct', [FamilyController::class, 'addProduct'])->middleware('auth');
Route::post('addTask', [FamilyController::class, 'addTask'])->middleware('auth');
Route::post('addMessage', [FamilyController::class, 'addMessage'])->middleware('auth');

Route::post('editarMembro/{id}', [FamilyController::class, 'editarMembro'])->middleware('auth');
Route::post('editandoMembro/{id}', [FamilyController::class, 'editandoMembro'])->middleware('auth');
Route::post('editProduct/{productId}', [FamilyController::class, 'editProduct'])->middleware('auth');
Route::post('deleteTask/{taskId}', [FamilyController::class, 'deleteTask'])->middleware('auth');