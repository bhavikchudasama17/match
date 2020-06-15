<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meet extends Model
{
    protected $table='meet';
    protected $fillable = [
        'uid','mid','date','time','place'
    ];
}
