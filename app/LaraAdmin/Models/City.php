<?php

namespace App\LaraAdmin\Models;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function address()
    {
        return $this->belongsTo('App\LaraNew\Models\Address');
    }

 public function state()
    {
        return $this->belongsTo('App\LaraNew\Models\State');
    }


}
