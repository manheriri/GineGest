<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract

{
    use Authenticatable;

    protected $fillable = [
        'name', 'surname1', 'surname2', 'email', 'password', 'dni','date_of_birth','userType'
    ];

    public function citas()
    {
        return $this->hasMany('App\Appointment');
    }

    public function observaciones()
    {
        return $this->hasMany('App\Observation');
    }

    public function tratamientos()
    {
        return $this->hasMany('App\Treatment');
    }

    public function embarazos()
    {
        return $this->hasMany('App\Pregnancy');
    }
    public function result()
    {
        return $this->hasMany('App\Result');
    }
    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname1;
    }
}
