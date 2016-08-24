<?php

namespace App\LaraAdmin\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function address()
    {
        return $this->belongsTo('App\LaraNew\Models\Address');
    }


    public function country()
    {
        return $this->belongsTo('App\LaraNew\Models\Country');
    }

	public function cities()
    {
        return $this->hasMany('App\LaraNew\Models\City');
    }


}
