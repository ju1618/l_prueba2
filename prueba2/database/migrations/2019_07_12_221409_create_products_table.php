<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id'); //crea una columna primary_key unsigned autoincremental
            $table->string('name', 100); //VARCHAR de hasta 100
            $table->decimal('price',8,2); //hasta 8 digitos de los cuales 2 son los decimales
            $table->string('image', 100);
            $table->unsignedBigInterger('user_id')->nullable();
            $table->foreign('user_id')->nullable();
            $table->timestamps(); //crea las dos culmnas de created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
