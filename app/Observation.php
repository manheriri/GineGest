<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = ['motherWeight','fetalWeight','gestationWeek','fetalGender','allergy','smoker',
        'drunker','bloodType','symptom','menarquia',
        'streptococoAgalacitae','fundalHeight','finalization','background','amniocentesis','personalSanitario_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

