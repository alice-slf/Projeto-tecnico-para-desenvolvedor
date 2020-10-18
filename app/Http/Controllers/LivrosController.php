<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        Livros::create([
            'autor' => $request->autor,
            'genero_Literario' => $request->genero_Literario,
            'editora' => $request->editora,
            'titulo' => $request->titulo,
            'ano_Lancamento' => $request->ano_Lancamento,
        ]);

        return "Livro Inserido com Sucesso!";
    }
}
