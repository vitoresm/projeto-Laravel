<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
   protected $fillabel = ['id_pedido', 'id_produto', 'quantidade'];
}
