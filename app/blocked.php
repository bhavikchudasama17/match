<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blocked extends Model
{
    protected $table='blocked';
    protected $fillable = [
        'uid','bid',
    ];
}
