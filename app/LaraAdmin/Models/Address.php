<?php

namespace App\LaraAdmin\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

 protected $fillable = ['address_line_1','address_line_2','profile_id','city_id','state_id','country_id'];


     public function profile()
    {
        return $this->belongsTo('App\LaraNew\Models\Profile');
    }

 	public function country()
    {
        return $this->hasOne('App\LaraNew\Models\Country');
    }

	public function state()
    {
        return $this->hasOne('App\LaraNew\Models\State');
    }

    public function city()
    {
        return $this->hasOne('App\LaraNew\Models\City');
    }







}
