<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncuestaHecha extends Model
{
    use HasFactory;

    protected $fillable = ['fecha'];

    public function encuesta(){

        return $this->belongsTo(Encuesta::class);
    }
    public function paciente(){

        return $this->belongsTo(Paciente::class);
    }


}
