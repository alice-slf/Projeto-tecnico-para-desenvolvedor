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

    public function store(Request $request)
    {
        Livro::create([
            'autor' => $request->autor,
            'genero_Literario' => $request->genero_Literario,
            'editora' => $request->editora,
            'titulo' => $request->titulo,
            'ano_Lancamento' => $request->ano_Lancamento,
        ]);

        return "Livro Inserido com Sucesso!";
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

    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->update([
            'autor' => $request->autor,
            'genero_Literario' => $request->genero_Literario,
            'editora' => $request->editora,
            'titulo' => $request->titulo,
            'ano_Lancamento' => $request->ano_Lancamento,
        ]);

        return "Livro Alterado com Sucesso!";
    }

    public function delete($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.delete', ['livro' => $livro]);
    }

    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();

        return "Livro Deletado com Sucesso!";
    }
}
