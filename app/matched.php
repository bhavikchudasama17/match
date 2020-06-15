<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matched extends Model
{
    protected $table='matched';
    protected $fillable = [
        'uid','mid',
    ];
}
