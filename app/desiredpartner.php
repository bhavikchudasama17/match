<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desiredpartner extends Model
{
    protected $table='desiredpartner';
    protected $fillable = [
        'uid','age','height','maritalstatus','religion','caste','education','occupation','income',
    ];//
}
