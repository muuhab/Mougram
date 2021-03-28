<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Post extends Model
{
    use HasFactory;
    public function user()
    {
       return $this->belongsTo('App\User');
    }
    public function likes(){
        return $this->hasMany('App\Like'); 
    }
    public function comments(){
        return $this->hasMany('App\Comment')->orderBy('created_at','desc');
    }
}
