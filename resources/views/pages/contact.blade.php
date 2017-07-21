@extends('main')
@section('title','| Contact Page')
@section('body-content')
    <!-- Contact FORM-->



    <div class="container">
      <div class="row">
        <div class="col-md-12">


          <section id="contact">
            <div class="section-content">
              <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
              <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
            </div>
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
