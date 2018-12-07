<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class custormer extends Model
{
    protected $table = 'custormer';
protected $fillable = [
    'custormer_name',
    'custormer_sex',
    'custormer_number',
    'custormer_style',
    'custormer_more'
];
}
