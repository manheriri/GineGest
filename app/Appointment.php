<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['reason','fechaCita','paciente_id','personalSanitario_id,medicoName,pacienteName'];

    public function usera()
    {
        return $this->belongsTo('App\User');
    }
}
