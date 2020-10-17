<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = ['nome', 'ano_Nasc', 'sexo', 'nacionalidade'];    
    protected $table = "autor";

    public $timestamp = false;
}
