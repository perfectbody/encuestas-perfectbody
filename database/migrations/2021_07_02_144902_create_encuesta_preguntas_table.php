<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestaPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta_preguntas', function (Blueprint $table) {
                    

            //**forane_key: encuesta->id
            $table->unsignedBigInteger('encuesta_id');
            
            $table->foreign('encuesta_id')->references('id')->on('encuestas');
          //**forane_key: pregunta->id 
            $table->unsignedBigInteger('pregunta_id')->nullable();

            $table->foreign('pregunta_id')->references('id')->on('preguntas');
            $table->primary(['encuesta_id','pregunta_id']);
           //simple varchar() 
            $table->string('preguntaNum');

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
        Schema::dropIfExists('encuesta_preguntas');
    }
}
