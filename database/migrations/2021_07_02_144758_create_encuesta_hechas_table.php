<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestaHechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta_hechas', function (Blueprint $table) {
            

            $table->unsignedBigInteger('encuesta_id')->unique();//primary key
            $table->foreign('encuesta_id')->references('id')->on('encuestas');

            $table->unsignedBigInteger('paciente_id');//primary key
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->date('fecha');
            $table->primary(['encuesta_id','paciente_id','fecha']);



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
        Schema::dropIfExists('encuesta_hechas');
    }
}
