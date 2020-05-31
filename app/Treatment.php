<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = ['commonName','tipoDeTratamiento','paciente_id','personalSanitario_id'];

    public function paciente()
    {

        return $this->belongsTo('App\User','paciente_id');
    }
    public function personalSanitario()
    {

        return $this->belongsTo('App\User','personalSanitario_id');
    }
    public function assocciationtreatmeds()
    {
        return $this->hasMany('App\AssociationTreatMed');
    }

}
