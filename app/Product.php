<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco'];

    public function pedido(){
        
        $this->belongsToMany(Pedidio::class);

    }
}
