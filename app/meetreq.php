<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meetreq extends Model
{
    protected $table='meetreq';
    protected $fillable = [
        'uid','rid','date','time','place'
    ];
}
