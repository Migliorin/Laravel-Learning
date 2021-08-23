<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('produro_id');

            $table->float('comprimento',8,2);
            $table->float('altura',8,2);
            $table->float('largura',8,2);
            $table->timestamps();

            // garantindo o relacionamento entre as tabelas
            $table->foreign('produro_id')->references('id')->on('produros');
            $table->unique('produro_id'); // relacionamento 1 para 1

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
}
