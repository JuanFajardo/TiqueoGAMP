<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            
            $table->integer('KEYEMPLEADO')->nullable();
            $table->string('NOMBRE',25)->nullable();
            $table->string('PATERNO',30)->nullable();
            $table->string('MATERNO',30)->nullable();
            $table->string('CI',12)->nullable();
            $table->string('LMILITAR',20)->nullable();
            $table->string('SEXO',1)->nullable();
            $table->string('CELULAR',10)->nullable();
            $table->date('FNAC')->nullable();
            $table->string('LNAC',15)->nullable();
            $table->string('DIREC',60)->nullable();
            $table->string('ZONA',40)->nullable();
            $table->integer('IDGRADO')->nullable();
            $table->string('TDOMICILIO',10)->nullable();
            $table->string('ECIVIL',1)->nullable();
            $table->date('FINGRESO')->nullable();
            $table->string('NOTAS',50)->nullable();
            $table->string('PHOTO')->nullable();
            $table->string('ESTADO',1)->nullable();
            $table->string('PHOTO_P')->nullable();
            $table->string('E_MAIL',100)->nullable();
            $table->string('NCUENTA')->nullable();
            $table->integer('NIT')->nullable();

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
        Schema::dropIfExists('empleados');
    }
}
