<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $fillable = ['commonName','presentation'];

    public function tratamientos()
    {
        return $this->belongsToMany('App/Traetment');
    }
    public function tratamiento()
    {
        return $this->hasMany('App\Treatment');
    }
}
