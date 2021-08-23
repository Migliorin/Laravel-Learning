<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // selecionando uma tabela ja existente
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->string('uf',2);
            $table->string('email',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // selecionando uma tabela ja existente
        Schema::table('fornecedors', function (Blueprint $table) {
            // para remova uma ou mais colunas
            //$table->dropColumn('uf');
            //$table->dropColumn('email');
            $table->dropColumn(['uf','email']);
        });
    }
}
