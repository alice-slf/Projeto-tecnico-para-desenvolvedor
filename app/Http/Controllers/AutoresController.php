<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;

class AutoresController extends Controller
{
    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request)
    {
        Autores::create([
            'nome' => $request->nome,
            'ano_Nasc' => $request->ano_Nasc,
            'sexo' => $request->sexo,
            'nacionalidade' => $request->nacionalidade,
        ]);

        return "Autor Inserido com Sucesso!";
    }

    public function show($id)
    {
        $autor = Autor::findOrFail($id);
        return view('autores.show', ['autor' => $autor]);
    }

    public function edit($id)
    {
        $autor = Autor::findOrFail($id);
        return view('autores.edit', ['autor' => $autor]);
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::findOrFail($id);

        $autor->update([
            'nome' => $request->nome,
            'ano_Nasc' => $request->ano_Nasc,
            'sexo' => $request->sexo,
            'nacionalidade' => $request->nacionalidade,
        ]);

        return "Autor Alterado com Sucesso!";
    }

}
