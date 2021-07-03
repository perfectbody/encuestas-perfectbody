<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    use HasFactory;

    public function pregunta(){

        
        return $this->belongsTo(Pregunta::class);
     }
     //uno a muchos
     public function  respuestas(){

        return $this->hasOne(Respuesta::class);
    }

}
