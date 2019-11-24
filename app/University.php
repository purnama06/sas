<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'university_name'
    ];

    public function adminUniversity()
    {
        return $this->belongsToMany('App\User', 'uni_admin', 'university_id', 'user_id')->withTimestamps();
    }

    public function programmeUniversity()
    {
        return $this->belongsToMany('App\Programme', 'uni_program', 'university_id', 'programme_id')->withTimestamps();
    }
}
