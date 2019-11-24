<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = [
        'qualification_name',
        'minimum_score',
        'maximum_score',
        'result_calc_description',
        'grade_list'
    ];
}
