<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cliente_id')->unsigned();

            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clients')->onDelete('cascade');
            
        });
    }

    // tabela 2 pedidos_produtos id, id_pedido, id_produto, quantidade 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
