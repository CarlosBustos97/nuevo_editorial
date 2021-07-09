<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursal__revistas', function (Blueprint $table) {
            $table->unsignedBigInteger('sucursal_id');
            $table->unsignedBigInteger('revista_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('revista_id')->references('id')->on('revistas')->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['sucursal_id','revista_id']);
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
        Schema::dropIfExists('sucursal__revistas');
    }
}
