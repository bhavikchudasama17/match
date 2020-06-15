<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loginhist extends Model
{
    protected $table='loginhist';
    protected $fillable = [
        'uid','intime','outtime'
    ];
}
