<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request){
        Livro::create([
            'nome' => $request->nome,
            'autor' => $request->autor,
            'editora' => $request->editora,
            'isbn' => $request->isbn,
            'idioma' => $request->idioma,
            'paginas' => $request->paginas,
            'preco' => $request->preco,
            'avaliacao_livro' => $request->avaliacao_livro,
  
        ]);
        return "Produto criado com sucesso!";
    }

    public function show($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.show', ['livro' => $livro]);
    }

    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.edit', ['livro' => $livro]);
    }

    public function update(Request $request, $id){
     $livro = Livro::findOrFail($id);

     $livro->update([
        'nome' => $request->nome,
        'autor' => $request->autor,
        'editora' => $request->editora,
        'isbn' => $request->isbn,
        'idioma' => $request->idioma,
        'paginas' => $request->paginas,
        'preco' => $request->preco,
        'avaliacao_livro' => $request->avaliacao_livro,
     ]);

     return "Produto Atualizado com sucesso";
    }

    public function delete($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.delete', ['livro' => $livro]);
    }

    public function destroy($id){
     $livro = Livro::findOrFail($id);
     $livro->delete();

     return "Livro excluido com sucesso";
    }
}
