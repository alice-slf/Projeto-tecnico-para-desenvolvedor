<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function create()
    {
        return view('autor.create');
    }

    public function store(Request $request)
    {
        Autor::create([
            'nome' => $request->nome,
            'ano_Nasc' => $request->ano_Nasc,
            'sexo' => $request->sexo,
            'nacionalidade' => $request->nacionalidade,
        ]);

        return "Autor Inserido com Sucesso!";
    }
}
