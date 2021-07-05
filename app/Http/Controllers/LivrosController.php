<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;


class LivrosController extends Controller
{
	

    
    public function create()
    {
    	return view('livros.create');
    }

    public function show()
    {
    	$livros = Livro::all();
    	return view ('livros.todos',['livros'=>$livros]);
    }

    public function store(Request $request)
    {
    	
    	$livro = new Livro;
    	
    	$livro->isbn = $request->isbn;
    	$livro->nome = $request->nome;
    	$livro->autor = $request->autor;
    	$livro->preco = $request->preco;

    	$livro->save();

		return view('livros.todos');
		#return redirect()->route('todos');
    	#return "Livro salvo com sucesso";
    }
    	
    public function edit($id)
    {
    	$livro = Livro::findOrFail($id);
    	return view('livros.editar', ['livro' => $livro]);
    }

    public function update(Request $request, $id)
    {

    	$livro = Livro::findOrFail($id);
        $livro->update([
            'isbn' => $request->isbn,
            'nome' => $request->nome,
            'autor' => $request->autor,
            'preco' => $request->preco,
        ]);
    	
    	return redirect('/livros/ver');
    }

    public function destroy($id)
    {
        $livro=Livro::findOrFail($id);
        $livro->delete();
        #return "Livro excluído com sucesso.";
        return redirect('/livros/ver');
    }
}
