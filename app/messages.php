<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    protected $table='messages';
    protected $fillable = [
        'sid','rid','iid','message',
    ];
}
