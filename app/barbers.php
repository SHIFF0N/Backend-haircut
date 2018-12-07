<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barbers extends Model
{
    protected $table = 'barbers';
    protected $fillable = [
        'id',
        'username',
        'password',
        'email'
    ];
}



