<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $fillable = [
        'programme_name',
        'description',
        'closing_date'
    ];

    public function universityProgramme()
    {
        return $this->belongsToMany('App\University', 'uni_program', 'programme_id', 'university_id')->withTimestamps();
    }

    public function applications()
    {
        return $this->hasMany('App\Application');
    }
}
