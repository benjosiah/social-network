<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    public function post(){
        return $this->hasOne('App\Post');
    }
    public function message(){
        return $this->hasOne('App\Message');
    }
}
