<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto');
            $table->string('titulo');
            $table->string('descricao',1024);
            $table->unsignedInteger('idCliente');

            $table->foreign('idCliente')
                    ->references('id')->on('clientes')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicidades');
    }
}
