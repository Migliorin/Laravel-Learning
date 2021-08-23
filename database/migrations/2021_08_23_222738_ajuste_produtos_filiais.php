<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('filiais', function (Blueprint $table){

        $table->id();
        $table->string('filial',30);
        $table->timestamps();

       });

       Schema::create('produtos_filiais', function (Blueprint $table){

        $table->id();
        $table->unsignedBigInteger('filial_id');
        $table->unsignedBigInteger('produro_id');
        $table->decimal('preco_venda',8,2);
        $table->integer('estoque_maximo');
        $table->integer('estoque_minimo');
        $table->timestamps();

        $table->foreign('filial_id')->references('id')->on('filiais');
        $table->foreign('produro_id')->references('id')->on('produros');

       });

       // removendo as colunas preco_venda, estoque_maximo/minimo da tabela produros
       Schema::table('produros', function (Blueprint $table){

        $table->dropColumn(['preco_venda','estoque_maximo','estoque_minimo']);

       });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produros', function (Blueprint $table){
            
        
            $table->decimal('preco_venda',8,2);
            $table->integer('estoque_maximo');
            $table->integer('estoque_minimo');
    
        });

           

        

        Schema::dropIfExists('produtos_filiais');
        Schema::dropIfExists('filiais');


    }
}
