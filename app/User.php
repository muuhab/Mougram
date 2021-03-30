<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;


class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use HasFactory;
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function likes(){
        return $this->hasMany('App\Like');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function friends()
    {
    return $this->belongsToMany('App\User', 'id', 'user_id', 'friend_id');
    }
}
