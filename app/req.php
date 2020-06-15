<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class req extends Model
{
    protected $table='req';
    protected $fillable = [
        'uid','rid',
    ];
}
