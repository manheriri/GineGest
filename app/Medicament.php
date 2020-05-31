<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $fillable = ['medicamentPresentation','medicamentCommonName'];

    public function assocciationtreatmeds()
    {
        return $this->hasMany('App\AssociationTreatMed');
    }
    public function getFullNameAttribute()
    {
        return $this->medicamentCommonName .' '.$this->medicamentPresentation;
    }

}
