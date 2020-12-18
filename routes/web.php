<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\UserController;

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


/*Rota inicial*/
Route::get('/', function () {
    return view('Index');
});

Route::post('painel',[UserController::class, 'login'])-> name('usuario.login');

/*Rotas para criar novo usuário*/
Route::get('usuario/novo', [UserController::class, 'novo']);

Route::post('usuario/inserir', [UserController::class, 'inserir']);

/*Rotas para criar novo atleta*/
Route::get('atleta/novo', [AtletaController::class, 'novo']);

Route::post('atleta/inserir', [AtletaController::class, 'inserir']);

/*Rotas para listar novo atleta*/
Route::get('atleta/lista', [AtletaController::class, 'lista']);


/*EM REVISÃO*/
Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});


Route::get('users', function (){
    return "usuario ";
});

Route::get('users/{id}', function ($id) {
    return "user id $id";
});


