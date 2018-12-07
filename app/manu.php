<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manu extends Model
{
    protected $table = 'manu';
    protected $fillable = [
        'manu_id',
        'manu_timemale',
        'manu_timefemale',
        'manu_pricemale',
        'manu_pricefemale'
    ];
}
