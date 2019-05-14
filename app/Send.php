<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Send extends Model
{

    protected $fillable = [
        'name', 'email', 'message',

        ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }




}
