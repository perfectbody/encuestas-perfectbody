<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
                        
            //**forane_key: encuesta->id 
            $table->unsignedBigInteger('encuesta_id');
            
            $table->foreign('encuesta_id')->references('id')->on('encuestas');
            ///**forane_key: paciente->cedula
            $table->unsignedBigInteger('paciente_id');
            
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            
            ////**forane_key: opcion->id 
            $table->unsignedBigInteger('opcion_pregunta')->nullable();

            $table->foreign('opcion_pregunta')->references('pregunta_id')->on('opcions');
            $table->unsignedBigInteger('opcion_id');//primary key
            $table->foreign('opcion_id')->references('id')->on('opcions');
            $table->primary(['encuesta_id','paciente_id','opcion_pregunta']);
            ///
            //primary key
            $table->text('argumento');
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
        Schema::dropIfExists('respuestas');
    }
}
