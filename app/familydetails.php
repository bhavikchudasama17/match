<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class familydetails extends Model
{
    protected $table='familydetails';
    protected $fillable = [
        'uid','mother','father','brother','sister','familyincome','stay',
    ];
}
