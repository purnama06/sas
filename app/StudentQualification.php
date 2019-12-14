<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentQualification extends Model
{
    protected $fillable = [
        'qualification_id',
        'subject_name',
        'grade',
        'score',
        'user_id'
    ];

    public function qualification()
    {
        return $this->belongsTo('App\Qualification');
    }
}
