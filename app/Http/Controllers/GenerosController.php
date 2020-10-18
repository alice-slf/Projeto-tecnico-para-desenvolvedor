<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;

class GenerosController extends Controller
{
    public function create()
    {
        return view('generos.create');
    }

    public function store(Request $request)
    {
        Generos::create([
            'nome' => $request->genero,
        ]);

        return "Genero Inserido com Sucesso!";
    }

    public function show($id)
    {
        $genero = Genero::findOrFail($id);
        return view('generos.show', ['genero' => $genero]);
    }

    public function edit($id)
    {
        $genero = Genero::findOrFail($id);
        return view('generos.edit', ['genero' => $genero]);
    }

    public function update(Request $request, $id)
    {
        $genero = Genero::findOrFail($id);
        $genero->update([
            'nome' => $request->genero,
        ]);

        return "Genero Alterado com Sucesso!";
    }

    public function delete($id)
    {
        $genero = Genero::findOrFail($id);
        return view('generos.delete', ['genero' => $genero]);
    }

    public function destroy($id)
    {
        $genero = Genero::findOrFail($id);
        $genero->delete();

        return "Genero deletado com Sucesso!";
    }
}
