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

Route::get('/livros/ver',[LivrosController::class,'show']);

Route::get('/livro/editar/{id}',[LivrosController::class,'edit'])->name('editar');
Route::post('/livro/editar/{id}',[LivrosController::class,'update'])->name('atualizar');

Route::get('livro/deletar/{id}',[LivrosController::class,'destroy'])->name('deletar');



Route::get('/livro/novo',[LivrosController::class,'create'])->name('criar');

Route::post('/livro/novo', [LivrosController::class,'store'])->name('store');














Route::get('/', function () {
    return view('welcome');
});
	