<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    // Variável para criar e atualizar os campos via Eloquent;
    protected $fillable = [
        'name',
        'cpf',
        'contact'
    ];

    // Variável para ocultar campo do model nos retornos
    protected $hidden= [];
}
