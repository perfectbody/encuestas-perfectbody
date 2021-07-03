<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['cedula','responsable','nombre','telefono','correo','habitacion'];
    public function encuestaHecha(){

        return $this->hasMany(EncuestaHecha::class);
    }
    public function  respuestas(){

        return $this->hasMany(Respuesta::class);
    }
}
