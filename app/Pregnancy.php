<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregnancy extends Model
{
    protected $fillable = ['fechaInicio', 'fetalWeigth','gestationWeek','fechaPrevista',
        'fechaFinal','fetalGender', 'streptococoAgalacitae','fundalHeight','finalization','amniocentesis',
        'paciente_id','personalSanitario_id'];

    public function paciente()
    {

        return $this->belongsTo('App\User', 'paciente_id');
    }

    public function personalSanitario()
    {

        return $this->belongsTo('App\User', 'personalSanitario_id');
    }
}
