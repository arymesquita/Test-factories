<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;


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

Route::get('/livros',[LivrosController::class,'show']);

Route::get('/livros/create',[LivrosController::class,'create']);



Route::get('/livros/edit',[LivrosController::class,'edit']);

Route::get('/', function () {
    return view('welcome');
});
	