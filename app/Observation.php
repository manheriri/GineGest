<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = ['symptom','comments','personalSanitario_id','paciente_id'];

    public function paciente()
    {

        return $this->belongsTo('App\User','paciente_id');
    }
    public function personalSanitario()
    {

        return $this->belongsTo('App\User','personalSanitario_id');
    }
}

