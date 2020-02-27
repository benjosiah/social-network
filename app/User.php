<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    public function post(){
        return $this->hasMany('App\Post');
    }
    public function message(){
        return $this->hasMany('App\Message','auth_user_id');
    }
    public function like(){
        return $this->hasMany('App\Like');
    }
}
