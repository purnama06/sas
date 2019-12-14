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
        'grade_list',
        'status'
    ];

    public function getStatus()
    {
        if($this->status == 0){
            return '<span class="badge badge-danger">Not Verified</span>';
        } else {
            return '<span class="badge badge-success">Verified</span>';
        }
    }
}
