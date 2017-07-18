<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;//include this post.php

class ArticleController extends Controller
{
    //
    public function getIndex(){
      $posts = Post::paginate(4);
      return view('article.index')->withPosts($posts);
    }


    public function getSingle($slug){
      //takes in a slug parameter from the route
      //based from db based on slug
      $post=Post::where('slug','=', $slug)->first();//first stops at the first result fof db fetch , grabs the result
      //  return a view  and pass in the post object
      return view('article.single')->withPost($post);
    }
}
