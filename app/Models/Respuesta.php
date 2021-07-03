<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    public function encuesta(){

        return $this->belongsTo(Encuesta::class);
    }
    public function paciente(){

        return $this->belongsTo(Paciente::class);
    }
    
    public function opcion(){

        return $this->belongsTo(Opcion::class);
    }
    public function pregunta(){

        return $this->belongsTo(Pregunta::class);
    }
}
