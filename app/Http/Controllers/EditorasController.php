<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;

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

    public function show($id)
    {
        $editora = Editora::findOrFail($id);
        return view('editoras.show', ['editora' => $editora]);
    }

    public function edit($id)
    {
        $editora = Editora::findOrFail($id);
        return view('editoras.edit', ['editora' => $editora]);
    }

    public function update(Request $request, $id)
    {
        $editora = Editora::findOrFail($id);
        $editora->update([
            'nome' => $request->nome,
        ]);

        return "Editora Alterada com Sucesso!";
    }

    public function delete($id)
    {
        $editora = Editora::findOrFail($id);
        return view('editoras.delete', ['editora' => $editora]);
    }

    public function destroy($id)
    {
        $editora = Editora::findOrFail($id);
        $editora->delete();

        return "Editora deletada com Sucesso!";
    }
}
