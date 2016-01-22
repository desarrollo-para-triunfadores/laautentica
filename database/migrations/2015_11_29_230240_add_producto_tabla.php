<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductoTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion', 1000);
            $table->boolean('estado');
            $table->integer('tipoproducto_id')->unsigned();
            $table->integer('marca_id')->unsigned();
            $table->integer('localidad_id')->unsigned();

            $table->foreign('tipoproducto_id')->references('id')->on('tiposproductos')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('localidad_id')->references('id')->on('localidades')->onDelete('cascade');

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
        Schema::drop('productos');
    }
}
