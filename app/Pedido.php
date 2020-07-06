<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['client_id', 'nome_cliente', 'produto_id', 'quantidade', 'valor' ];

    public function client(){
        return $this->hasOne(Client::class, 'client_id');
    }

    public function products(){
        return $this->hasMany(Product::class, 'produto_id');
    }
}

