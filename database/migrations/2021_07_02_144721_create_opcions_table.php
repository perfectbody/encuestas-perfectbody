<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcions', function (Blueprint $table) {
            $table->unsignedBigInteger('id');

            $table->unsignedBigInteger('pregunta_id')->nullable(false);//primary key

            $table->foreign('pregunta_id')->references('id')->on('preguntas')->cascadeOnDelete();
            $table->primary(['id','pregunta_id']);
            $table->string('texto');

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
        Schema::dropIfExists('opcions');
    }
}
