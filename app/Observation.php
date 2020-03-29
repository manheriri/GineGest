<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = ['motherWeight','fetalWeight','gestationWeek','fetalGender','allergy','smoker',
        'drunker','previousIllness','previousAbortion','blooType', 'menopause','symptom','menarquia','breastfeed',
        'streptococoAgalacitae','fundalHeight'];
}
