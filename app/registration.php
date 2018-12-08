<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    protected $table = 'manu';
    protected $fillable = [
        'registration_name',
        'registration_number',
        'registration_closedate',
        'registration_timeopen',
        'registration_timeclose',
        'registration_photo1',
        'registration_photo2',
        'registration_address',
        'registration_profile',
        'status_id'
        
    ];
}
