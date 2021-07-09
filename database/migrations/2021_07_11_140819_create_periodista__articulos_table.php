<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodistaArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodista__articulos', function (Blueprint $table) {
            $table->unsignedBigInteger('periodista_id');
            $table->unsignedBigInteger('articulo_id');
            $table->foreign('periodista_id')->references('id')->on('periodistas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('articulo_id')->references('id')->on('articulos')->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['periodista_id','articulo_id']);
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
        Schema::dropIfExists('periodista__articulos');
    }
}
