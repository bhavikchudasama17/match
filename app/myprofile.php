<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myprofile extends Model
{
    protected $table='myprofile';
    protected $fillable = [
        'uid','image','age','maritalstatus','height','nature','about',
    ];
}
