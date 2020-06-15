<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    protected $table='contactus';
    protected $fillable = [
        'uid','message'
    ];
}
