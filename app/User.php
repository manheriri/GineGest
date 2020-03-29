<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name','surname1','surname2','email', 'password','dni'
    ];
}
