<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorasController extends Controller
{
    public function create()
    {
        return view('editoras.create');
    }

    public function store(Request $request)
    {
        Editoras::create([
            'nome' => $request->nome,
        ]);

        return "Editora Inserida com Sucesso!";
    }
}
