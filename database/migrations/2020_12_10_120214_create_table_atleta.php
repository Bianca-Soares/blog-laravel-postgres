<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAtleta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
               /* Schema::table('table_atleta', function (Blueprint $table) {
                $new="tb_table";
                Schema::rename("table_atleta", "tb_atleta");
                
            });*/
    public function up()
    {
        if (Schema::hasTable('tb_atleta')) 
        {
            Schema::dropIfExists('tb_atleta');
        }else{
            Schema::create('tb_atleta', function (Blueprint $table) {
                $table->string('nome');
                $table->string('cpf');
                $table->string('data_nasc');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_atleta');
    }
}
