<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use Session;

class Post extends Model
{
    //
    public function category(){
      return $this->belongsTo('App\Category'); //the post belongs to category relationship
    }
    public function comments(){
      return $this->hasMany('App\Comment');//one post many comments and vice verse
    }
}
