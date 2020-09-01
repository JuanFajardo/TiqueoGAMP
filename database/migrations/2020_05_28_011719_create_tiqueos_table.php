<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiqueosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiqueos', function (Blueprint $table) {
            $table->id();
            $table->integer('KEYEMPLEADO')->nullable();
            $table->date('FECHA	DATE')->nullable();
            $table->dateTime('HETM')->nullable();
            $table->dateTime('HSTM')->nullable();
            $table->float('MRM',4,2)->nullable();
            $table->string('OM',2)->nullable();
            $table->dateTime('HETT')->nullable();
            $table->dateTime('HSTT')->nullable();
            $table->float('MRT',4,2)->nullable();
            $table->string('OT',2)->nullable();
            $table->float('MRTD',4,2)->nullable();
            $table->integer('FTD',2,1)->nullable();
            $table->dateTime('TWD')->nullable();
            $table->float('CN',2,1)->nullable();
            $table->float('CR',2,1)->nullable();
            $table->float('CP',2,1)->nullable();
            $table->float('CQ',2,1)->nullable();
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
        Schema::dropIfExists('tiqueos');
    }
}
