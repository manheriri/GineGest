<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = ['commonName','ReproductiveTreatmentType','paciente_id','personalSanitario_id'];

    public function paciente()
    {

        return $this->belongsTo('App\User','paciente_id');
    }
    public function personalSanitario()
    {

        return $this->belongsTo('App\User','personalSanitario_id');
    }
    public function medicamentos()
    {
        return $this->hasMany('App\Medicament');
    }
}
