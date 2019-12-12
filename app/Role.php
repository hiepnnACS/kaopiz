<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = 'roles';

    public function user()
    {
    	return $this->belongsToMany('App/RoleUser', 'role_users');
    }
}
