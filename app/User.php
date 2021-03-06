<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'users';

    protected $fillable = ['username', 'password', 'group'];

    protected $hidden = ['password'];

    public function products()
    {
        return $this->hasMany('App\Product', 'user_id');
    }

}
