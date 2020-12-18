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
        Schema::table('tb_usuario', function (Blueprint $table) {
            if (Schema::hasTable('tb_usuario')) {
            //Schema::dropIfExists('tb_usuario');
        }else{
            $table->string('CPF');
            $table->string('nome');
            $table->string('email');
            $table->string('senha');
            $table->timestamps();

        }    
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_usuario', function (Blueprint $table) {
            //
        });
    }
}
