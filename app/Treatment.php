<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = ['commonName','ReproductiveTreatmentType'];

    public function usert()
    {
        return $this->belongsToMany('App\User');
    }
    public function medicamentos()
    {
        return $this->hasMany('App\Medicament');
    }
}
