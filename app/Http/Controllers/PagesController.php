<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;

 use App\Http\Requests;
 use App\Post;
 use Session;
 use Mail;

 class PagesController extends Controller {
   public function getIndex(){
    # process variable or params
    #talk to model
    # recieve data back from the model
    #process data received from the model
    #pass data to the correct view
    $posts = Post::orderBy('created_at', 'desc')->limit(6)->get();
    return view ('pages.welcome')->withPosts($posts);

   }
   public function getAbout(){
     $first = 'rogers';
     $second= "momanyi";
     $email= "roger@gmail.com";
     $fullname = $first." ".$second;
    $data = [];
    $data['fullname'] = $fullname;
    $data['email']= $email;
     return view('pages.about') ->withData($data);
   }
   public function getContact(){
     return view('pages.contact');
   }
   public function postContact( Request $request){
     $this-> validate($request, [
       'name'=>"max:255",
       'email'=>'required|email',
       'subject'=>'required|min:3',
       'message'=>'required|min:10'
     ]);
     //lets put it in an email
     $data = array(
       'name'=>$request->name,
       'email'=> $request->email,
       'subject'=> $request->subject,
       'bodyMessage'=>$request->message
     );

     Mail::send('emails.contact', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('service@afyafitness.com');
        $message->subject($data['subject']);
     });

     Session::flash('success', 'Email sent!');
     return redirect('/');
   }

 }
