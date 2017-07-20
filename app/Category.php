<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //tell laravel to use categories when using this mode:
    protected $table ='categories';

    //establish relationships
    //category is one but has many posts 1to many

    public function posts(){
       return $this->hasMany('App\Post'); //connecct it to the post model and  to category_id
    }
}
