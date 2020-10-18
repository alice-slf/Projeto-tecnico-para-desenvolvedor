<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['autor', 'genero_Literario', 'editora', 'titulo', 'ano_Lancamento'];
}
