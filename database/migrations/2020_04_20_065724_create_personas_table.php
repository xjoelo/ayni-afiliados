<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();

            $table->string('apellidoPaterno',100)->nullable();
            $table->string('apellidoMaterno',100)->nullable();
            $table->string('nombres',100)->nullable();
            $table->string('dni',8)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->string('estadoCivil',2)->nullable();
            $table->string('sexo',1)->nullable();
            $table->string('lugarNacimiento')->nullable();
            $table->integer('idDepartamento')->nullable();
            $table->integer('idProvincia')->nullable();
            $table->integer('idDistrito')->nullable();
            $table->string('avenida')->nullable();
            $table->string('numero')->nullable();
            $table->string('urbanizacion')->nullable();
            $table->string('telefono',11)->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();

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
        Schema::dropIfExists('personas');
    }
}
