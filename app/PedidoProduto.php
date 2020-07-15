<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
   protected $fillabel = ['id_pedido', 'id_produto', 'quantidade'];

   //belongs contem a chave fk na tabela para buscar

   public function buscarPedidos(){

      return $this->belongsTo('App\Pedido', 'id_pedido');

   }

   public function buscarProduto(){

      return $this->belongsTo('App\Product', 'id_produto');

   }

}
