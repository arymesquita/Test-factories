<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;



Route::group(['prefix' => 'livro'], function() {


	Route::get('/editar/{id}',[LivrosController::class,'edit'])->name('editar');
	Route::post('/editar/{id}',[LivrosController::class,'update'])->name('atualizar');

	Route::get('/deletar/{id}',[LivrosController::class,'destroy'])->name('deletar');

	Route::get('/novo',[LivrosController::class,'create'])->name('criar');

	Route::post('/novo', [LivrosController::class,'store'])->name('store');
});


Route::get('/livros/ver',[LivrosController::class,'show']);


Route::get('/', function () {
    return view('welcome');
});
	