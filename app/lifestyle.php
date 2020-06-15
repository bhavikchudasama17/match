<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lifestyle extends Model
{
    protected $table='lifestyle';
    protected $fillable = [
        'uid','appearance','weight','assets','habbits','languageknown','bloodgroup','stay',
    ];
}
