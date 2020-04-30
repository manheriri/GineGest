<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregnancy extends Model
{
    protected $fillable = ['fechaInicio','fechaPrevista','fechaFinal'];

    public function userp()
    {
        return $this->belongsTo('App\User');
    }
}
