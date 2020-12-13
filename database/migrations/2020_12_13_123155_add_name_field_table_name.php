<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameFieldTableName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //Adicionar coluna
    public function up()
    {
        Schema::table('tb_atleta', function (Blueprint $table) {
            
          /*  $table->string('cpf') // Nome da coluna
                    ->nullable() // Preenchimento não obrigatório
                    ->after('nome'); // Ordenado após a coluna "nome"*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_atleta', function (Blueprint $table) {
            $table->dropColumn('cpf');
        });
    }
}
