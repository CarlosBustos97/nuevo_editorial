<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevistaArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revista__articulos', function (Blueprint $table) {
            $table->unsignedBigInteger('revista_id');
            $table->unsignedBigInteger('articulo_id');
            $table->foreign('revista_id')->references('id')->on('revistas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('articulo_id')->references('id')->on('articulos')->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['articulo_id','revista_id']);
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
        Schema::dropIfExists('revista__articulos');
    }
}
