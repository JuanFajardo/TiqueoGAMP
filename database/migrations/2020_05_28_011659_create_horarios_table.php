<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();

            $table->integer('KEYHORARIO');
            $table->dateTime('HORASEM')->nullable();
            $table->dateTime('HORASSM')->nullable();
            $table->dateTime('HORASET')->nullable();
            $table->dateTime('HORASST')->nullable();
            $table->string('NOMBRE',50)->nullable();
            $table->string('DESCRIPCION',40)->nullable();
            $table->dateTime('HIMLI')->nullable();
            $table->dateTime('HIMLF')->nullable();
            $table->dateTime('HSMLI')->nullable();
            $table->dateTime('HSMLF')->nullable();
            $table->dateTime('HITLI')->nullable();
            $table->dateTime('HITLF')->nullable();
            $table->dateTime('HSTLI')->nullable();
            $table->dateTime('HSTLF')->nullable();
            $table->string('LUGAR',20)->nullable();
            $table->string('TIPO',1)->nullable();

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
        Schema::dropIfExists('horarios');
    }
}
