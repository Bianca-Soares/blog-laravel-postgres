<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTbUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('tb_usuario')) 
        {
            //Schema::dropIfExists('tb_atleta');
        }else{
            Schema::create('tb_usuario', function (Blueprint $table) {
                $table->id();
                $table->string('CPF');
                $table->string('nome');
                $table->string('email');
                $table->string('senha');
                $table->string('perfil');
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
        Schema::dropIfExists('tb_usuario');
    }
}
