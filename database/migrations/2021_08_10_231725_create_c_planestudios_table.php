<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCPlanestudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_planestudios', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->autoIncrement();
            $table->string('nombre', 100);
            $table->string('nombre_corto', 10);
            $table->boolean('estatus');

            $table->unsignedSmallInteger('num_creditos_total');
            $table->unsignedTinyInteger('num_creditos_min');
            $table->unsignedTinyInteger('num_creditos_max');

            $table->dateTime('fcreacion',$precision=0);
            $table->dateTime('fmodificacion',$precision=0)->nullable($value=true);
            $table->unsignedTinyInteger('idcarrera');

            $table->foreign('idcarrera')->references('id')->on('c_carreras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_planestudios');
    }
}
