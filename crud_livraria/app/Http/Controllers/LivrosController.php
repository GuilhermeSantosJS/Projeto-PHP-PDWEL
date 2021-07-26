<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroRequest;
use App\Models\Livro;
use Illuminate\Support\Facades\Auth;

class LivrosController extends Controller
{
    public function create()
    {
        
        if(!Auth::check()){
            return view('dashboard');
        }
        return view('livros.create');
    }

    public function store(LivroRequest $request)
    {
        
        if(!Auth::check()){
            return view('dashboard');
        }
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

        $livros = Livro::get();

        return view('livros.show', compact('livros'));
    }

    public function show()
    {
        if(!Auth::check()){
            return view('dashboard');
        }
        $livros = Livro::get();
        return view('livros.show', compact('livros'));
    }

    public function edit($id)
    {
        if(!Auth::check()){
            return view('dashboard');
        }
        $livro = Livro::findOrFail($id);
        return view('livros.edit', ['livro' => $livro]);
    }

    public function update(LivroRequest $request, $id)
    {
        
        if(!Auth::check()){
            return view('dashboard');
        }
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

        $livros = Livro::get();

        return view('livros.show', compact('livros'));
    }

    public function destroy($id)
    {
        
        if(!Auth::check()){
            return view('dashboard');
        }

        Livro::findOrFail($id)->delete();

        return redirect('/livro/ver');

        
    }
}
