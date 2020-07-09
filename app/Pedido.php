<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['cliente_id'];

   // public function client(){
//        return $this->hasOne(Client::class, 'cliente_id');
 //   }

 //   public function products(){
 //       return $this->hasMany(Product::class, 'produto_id');
//    }
}

