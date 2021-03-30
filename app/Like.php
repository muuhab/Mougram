<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function post(){
        return $this->belongsTo('App\Post');

    }
}
