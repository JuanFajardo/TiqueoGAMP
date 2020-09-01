<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->id();

            $table->integer('KEYEMPLEADO')->nullable();
            $table->string('CODEMPLEADO',10)->nullable();
            $table->integer('ITEM')->nullable();
            $table->integer('NUMPROYECTO')->nullable();
            $table->integer('KEYUNIDAD')->nullable();
            $table->integer('KEYCARGO')->nullable();
            $table->integer('KEYSALARIO')->nullable();
            $table->date('FECHAC')->nullable();
            $table->string('RAZON')->nullable();
            $table->string('DETALLE')->nullable();
            $table->date('FECHAINICIO')->nullable();
            $table->date('FECHACONCLUSION')->nullable();
            $table->integer('KEYBLOQUEO')->nullable();
            $table->string('TRABSABADO',2)->nullable();
            $table->date('FECHA_CONCLUSION_CONTRATO')->nullable();
            $table->integer('KEYEDIFICIO')->nullable();
            $table->integer('KEYEDIFICIO2')->nullable();
            $table->string('TIPOAFILIACION',50)->nullable();
            $table->integer('KEYHORARIO')->nullable();
            $table->date('LASTUPDATE')->nullable();
            $table->integer('HABERBASICO')->nullable();
            $table->integer('KEYTIPOEMPLEADO')->nullable();
            $table->integer('TIQUEA')->nullable();
            $table->string('KEYPROYECTO',30)->nullable();
            $table->integer('KEYUSERLASTUPDATEDBY')->nullable();

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
        Schema::dropIfExists('controls');
    }
}
