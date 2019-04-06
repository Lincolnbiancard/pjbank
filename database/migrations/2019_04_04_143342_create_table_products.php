<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('codigoProduto');
            $table->string('descricaoProduto');
            $table->integer('qtdeProduto');
            $table->float('precoProduto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
