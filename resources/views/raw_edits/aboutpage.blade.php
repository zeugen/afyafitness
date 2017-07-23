@extends('main')
@section('title','| About Page')
@section('body-content')
    <div class="intro-header">

        <div class="intro-title">
          <h1>Afyafitness</h1>
          <div><em>about us</em></div>
          <hr class="intro-divider">
        </div>
        <div><img src="{{asset('img/icons/scroll-down-w.png')}}" alt="scroll down" class="ico-md img-responsive animated fadeInDown infinite"></div>

    </div>

    <!-- LATEST ARTICLE POST -->
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1>About Us</h1>
              <p>Thank you so much for visiting</p>
              <p> We help people everywhere look good, feel good, do good in order to live more fulfilling lives every day.</p>
              <p>
                <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Popular Post &raquo;</a>
              </p>
            </div>
            <div class="col-md-4 col-md-offset-1">
              <img src="{{asset('img/icons/logo2.png')}}" alt="afyafitness logo" class="img-responsive">
            </div>
          </div>
        </div>

      </div>

    </div> <!-- /container -->
@endsection
