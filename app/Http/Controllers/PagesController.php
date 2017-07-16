<?php
 namespace App\Http\Controllers;

 class PagesController extends Controller {
   public function getIndex(){
    # process variable or params
    #talk to model
    # recieve data back from the model
    #process data received from the model
    #pass data to the correct view
    return view ('pages.welcome');

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

 }
