<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intrested extends Model
{
    protected $table='intrested';
    protected $fillable = [
        'uid','iid',
    ];
}
