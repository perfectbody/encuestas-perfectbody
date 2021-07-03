<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
                       
            $table->string('cedula')->nullable(false);//primary key//not null
            $table->string('responsable')->nullable(false);//not null
            $table->string('nombre')->nullable(false);//not null
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('habitacion')->nullable();

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
        Schema::dropIfExists('pacientes');
    }
}
