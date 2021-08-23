<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade',5); // cm, mm, kg
            $table->string('descricao',30); // detalhando a unidade de medida

            $table->timestamps();
        });

        // adicionar o relacionamento da tabela produros
        Schema::table('produros',function (Blueprint $table){

            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');

        });

        // adicionar o relacionamento da tabela produtos_detalhes
        Schema::table('produto_detalhes',function (Blueprint $table){

            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // removendo o relacionamento da tabela produros
        Schema::table('produros',function (Blueprint $table){

            // remocao da foreign e [tabela]_[coluna]_foreign
            $table->dropForeign('produros_unidade_id_foreign');
            $table->dropColumn('unidade_id');

        });

        // removendo o relacionamento da tabela produtos_detalhes
        Schema::table('produto_detalhes',function (Blueprint $table){

           // remocao da foreign e [tabela]_[coluna]_foreign
           $table->dropForeign('produto_detalhes_unidade_id_foreign');
           $table->dropColumn('unidade_id');

        });

        Schema::dropIfExists('unidades');
    }
}
