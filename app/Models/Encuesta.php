<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    protected $fillable = ['id','unidadfuncional'];

    //muchos a muchos
    public function encuestaHecha(){
        

        return $this->hasMany(EncuestaHecha::class);
    }
    public function encuestaPregunta(){

        return $this->hasMany(EncuestaPregunta::class);
    }
    public function  respuestas(){

        return $this->hasMany(Respuesta::class);
    }
}
