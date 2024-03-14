<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'cliente_id',
    ];
}
