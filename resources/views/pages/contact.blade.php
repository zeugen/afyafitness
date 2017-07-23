@extends('main')
@section('title','| Contact Page')
@section('body-content')
    <!-- Contact FORM-->
    <header id="contact-page" class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Get In Touch With Us</h1>
                        <hr class="small">
                        <span class="subheading">For most, we are an email away</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <div class="container">
      <div class="row">
        <div class="col-md-12">


          <section id="contact">
            <div class="section-content container">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
                  <h3>Let’s Take Back Your Health—Starting Now!</h3>
                  <p  class="lead">If you have a general question, please post it in the comments section of an appropriate blog post Chris or his staff will do their best to respond.</p>
                  <hr class="divider-sm">
                  <p class="lead">If you have questions about health, supplements or something else requiring support, please use  the following form, as this will be the fastest way to receive help with your questions or problem.</p>
                </div>
              </div>

            </div>
            <hr class="divider-lg">
            <div class="contact-section">
            <div class="container">
              <form action="{{url('contact')}}" method="POST">
                {{csrf_field()}}
                <div class="col-md-6 form-line">
                    <div class="form-group">
                      <label for="name">Your name</label>
                      <input type="text" class="form-control" name="name" placeholder=" Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="subject">Email Subject</label>
                      <input type="text" class="form-control" name="subject" placeholder=" Subject">
                    </div>
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" name="email" placeholder=" Enter Email id">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for ="message"> Message</label>
                      <textarea  class="form-control" name="message" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div>

                      <input type="submit" value="Send Message" class="btn btn-success ">

                    </div>

                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
@endsection
