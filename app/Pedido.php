<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['cliente_id'];

    public function buscarPedidoProdutos(){

        return $this->hasMany('App\PedidoProduto', 'id_pedido');

    }

    public function buscarCliente(){

        return $this->belongsTo('App\Client', 'cliente_id' );
    
    }
}

