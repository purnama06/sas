<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'programme_id',
        'user_id',
        'application_date',
        'status'
    ];

    public function programme()
    {
        return $this->belongsTo('App\Programme');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getStatus()
    {
        if($this->status == 'new'){
            return '<span class="badge badge-info">New</span>';
        } else if($this->status == 'successful'){
            return '<span class="badge badge-success">Successful</span>';
        } else {
            return '<span class="badge badge-danger">Unsuccessful</span>';
        }
    }
}
