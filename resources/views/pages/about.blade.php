@extends('main')
@section('title','| About Page')
@section('body-content')
  {{-- PAGE HEADER --}}
  <header id="about-page" class="page-header">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="page-heading">
                      <h1>About Us</h1>
                      <hr class="small">
                      <span class="subheading">This is what we do.</span>
                  </div>
              </div>
          </div>
      </div>
  </header>

    <!-- LATEST ARTICLE POST -->
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class=" home-sections">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1 class="text-center">Thank you so much for visiting</h1>
              <hr class="divider-lg">
              <p class="lead text-center"> AfyaFitness is an informational and learning portal for raising awareness for healthy food and wellness.To many , it is a treasure of information. We are publishing new information in the field of nutrition, current information and educational content deployed in several thematic areas like: Natural Remedies, Diet and Weight loss, Health Benefits of Fruits and Vegetables, Healthy Recipes, Health Tips and many more.</p>
              <p>

              </p>
            </div>
            <div class="col-md-4 col-md-offset-1">
              <img src="{{asset('img/icons/logo2.png')}}" alt="afyafitness logo" class="img-responsive">
            </div>
          </div>
        </div>

      </div>

    </div> <!-- /container -->
    <!-- Team Section -->
<section id="team" class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <hr class="divider-lg">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="{{"img/ngash.jpg"}}" class="img-responsive profile-thumbs img-circle" alt="">
                    <h4>Ngash Sage</h4>
                    <p class="text-muted"> Clinical Pyschologist</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="{{"img/jackie.jpg"}}" class="img-responsive profile-thumbs img-circle" alt="">
                    <h4>Jackie Brown</h4>
                    <p class="text-muted">Nutritional Consultant</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="{{"img/rogers.jpg"}}" class="img-responsive profile-thumbs img-circle" alt="">
                    <h4>Rogers Momanyi</h4>
                    <p class="text-muted">Fitness Expert</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
          <hr class="divider-lg">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large ">We are a team of many renowned nutritionists, and specialists from various areas of nutrition, fitness with extensive experience.
                Our mission is We help people everywhere look good, feel good, do good in order to live more fulfilling lives every day.</p>
            </div>
        </div>
    </div>
</section>
@endsection
