<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matchedreq extends Model
{
    protected $table='matchedreq';
    protected $fillable = [
        'uid','mid',
    ];
}
