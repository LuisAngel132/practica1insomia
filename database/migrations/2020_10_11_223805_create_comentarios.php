<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->timestamps();
            $table->string('comentario');
            $table->unsignedBigInteger('persona')->unsigned();
            $table->foreign('persona')->references('idpersona')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('producto')->unsigned();
            $table->foreign('producto')->references('idproducto')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
