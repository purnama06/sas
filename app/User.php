<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'level', 'username'
    ];

    protected $hidden = ['password'];

    public function setPasswordAttribute($val)
    {
        return $this->attributes['password'] = bcrypt($val);
    }

    public function universityAdmin()
    {
        return $this->belongsToMany('App\University', 'uni_admin')->withTimestamps();
    }


}
