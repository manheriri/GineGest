<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssociationTreatMed extends Model
{
    protected $fillable = ['initialDate','finalDate','instructions','treatment_id','medicament_id'];


    public function treatment()
    {
        return $this->belongsTo('App\Treatment');
    }

    public function medicament()
    {
        return $this->belongsTo('App\Medicament');
    }
    public function getFullNameAttribute()
    {
        return $this->medicamentCommonName .' '.$this->medicamentPresentation;
    }
}

