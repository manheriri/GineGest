<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['reason','fechaCita','paciente_id','personalSanitario_id'];

    public function paciente()
    {

        return $this->belongsTo('App\User','paciente_id');
    }
    public function personalSanitario()
    {

        return $this->belongsTo('App\User','personalSanitario_id');
    }
}
