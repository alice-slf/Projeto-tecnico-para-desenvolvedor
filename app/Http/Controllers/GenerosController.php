<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
