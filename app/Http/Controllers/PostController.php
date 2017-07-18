<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Session;

class PostController extends Controller
{
    // create a construct for the middleware that locks not logged in people from viewing the posts controller and its assoc routes
    public function __construct(){
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //1)create a var and store all blogposts from the Database
        // 2)Return a view and pass in the above variable
        $posts = Post::orderBy('id', 'desc')->paginate(7); //again we are using eloquents all to grab all posts from the Database

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //show the form found in the posts folder
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //pullin all data recieved from the form
        //validate the form first before storing it to the dbase tables
        $this-> validate($request,array(
          //rules we want to validate against
            'title'=> 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'body' => 'required'

        ));
        //if there is an error a message will be sent back to the create view
        //store to db
        //create new isntance of model posts
        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;

        //save the object with save method

        $post->save();

        //create flash session message
        Session::flash('success','the post was successfully saved!' );

        //redirect / show the post
        return redirect()->route('posts.show',$post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //use find from eloquent package that is similar to where in php sql query to find post using id
        $post = Post::find($id);

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //fidn the post in db and save it in a var using a GET request
          $post = Post::find($id);

        // return the view and pass the var we previously created to db
          return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate data before we use it
        $post= Post::find($id);
        if ($request->input('slug') == $post->slug) {
          # code...
          $this->validate($request, array(
            //rules we want to validate against
              'title'=> 'required|max:255',
              'body' => 'required'
          ));
        }else {
          # code...
          $this->validate($request, array(
            //rules we want to validate against
              'title'=> 'required|max:255',
              'slug'=> 'required|alpha_dash|min:5|max:255|unique:posts,slug',
              'body' => 'required'
          ));
        }

        //save data to db
        $post = Post::find($id);
        //match fields to those in the Database
        $post->title =$request->input('title');
        $post->slug =$request->input('slug');
        $post->body= $request->input('body');
        $post->save();
        //request contains all data passed from form during the post request
        //set flash data with success message
        Session::flash('success', 'This post was successfully updated!');
        // /redirect with flash data to the view i.e posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Remember to setup a form aroudn delete method to make it send as a delete button on view
        //find item that we are going to delete
        $post =Post::find($id);
        $post->delete();

        //after delete redirect to the following view
        //but first flash message to show delete was successful
        Session::flash('success', 'The post was successfully deleted!');
        return redirect()->route('posts.index');

    }


}
