<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'estado', 'cidade', 'bairro', 'rua', 'numero', 'complemento'];
}
