<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'id_type',
        'id_number',
        'mobile_no',
        'date_of_birth',
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }


}
