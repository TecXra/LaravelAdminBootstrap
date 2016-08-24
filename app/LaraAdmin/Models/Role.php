<?php

namespace App\LaraAdmin\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role_name'];




  public function users()
    {
        return $this->belongsToMany('App\LaraNew\Models\User','role_user', 'role_id','user_id');
    }




}