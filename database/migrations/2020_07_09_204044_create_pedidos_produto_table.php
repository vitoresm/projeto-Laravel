<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produtos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_pedido')->unsigned();

            $table->integer('id_produto')->unsigned();

            $table->integer('quantidade');

            $table->timestamps();

            $table->foreign('id_pedido')->references('id')->on('pedidos');
            
            $table->foreign('id_produto')->references('id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos_produtos');
    }
}
