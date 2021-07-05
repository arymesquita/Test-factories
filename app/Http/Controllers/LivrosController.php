<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
	

    public function show() 
    {
    	return view('livros.todos');
    }

    public function create()
    {
    	return view('livros.create');
    }

    public function edit()
    {
    	return view('livros.edit');
    }
}
