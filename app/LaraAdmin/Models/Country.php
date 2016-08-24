<?php

namespace App\LaraAdmin\Models;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
      public function address()
    {
        return $this->belongsTo('App\LaraNew\Models\Address');
    }


	public function states()
    {
        return $this->hasMany('App\LaraNew\Models\State');
    }


}
