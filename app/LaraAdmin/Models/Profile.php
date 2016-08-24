<?php

namespace App\LaraAdmin\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{




     public function user()
    {
        return $this->belongsTo('App\LaraNew\Models\User');
    }



 	public function addresses()
    {
        return $this->hasMany('App\LaraNew\Models\Address');
    }




}
