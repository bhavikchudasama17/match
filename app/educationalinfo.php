<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class educationalinfo extends Model
{
    protected $table='educationalinfo';
    protected $fillable = [
        'uid','highesteducation','ugdegree','pgdegree','school','ugcollege','pgcollege','occupation','annualincome',
    ];
}
