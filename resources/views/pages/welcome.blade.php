@extends('main')
@section('title',' | Home Page')

@section('body-content')
      <div class="intro-header">

          <div class="intro-title">
            <h1>Stay inspired, learn and <br>immerse yourself</h1>
            <hr class="intro-divider">
          </div>
          <div><img src="{{asset('img/icons/scroll-down-w.png')}}" alt="scroll down" class="ico-md img-responsive animated fadeInDown infinite"></div>

      </div>

      <!-- LATEST ARTICLE POST -->
      <section class="home-sections" id="about">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2 text-center">
                      <h2 class="section-heading">We've got what you need!</h2>
                      <hr class="divider-lg">
                      <p class="text-faded">
                        We are a team of many renowned nutritionists, and specialists from various areas of nutrition, fitness with extensive experience.
                        Our mission is We help people everywhere look good, feel good, do good in order to live more fulfilling lives every day.</p>
                      <hr class="divider-sm">
                      <a href="/article" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                  </div>
              </div>
          </div>
      </section>

      <section id="services" class="home-sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="divider-lg">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- ENTER 5 RECENT ARTICLE POSTS -->

    <section class="no-padding home-sections" id="article">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">

                  <h2 class="section-heading">Current Articles</h2>
                <hr class="divider-lg">
              </div>
          </div>
      </div>
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">

                @foreach($posts as $post)
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ url('article/'.$post->slug) }}" class="article-box">
                        <img src="{{asset('images/'. $post->image)}}" class="img-responsive" alt="">
                        <div class="article-box-caption">
                            <div class="article-box-caption-content">
                                <div class="project-category text-faded">
                                    {{$post->category->name}}
                                    <hr class="divider-sm">
                                </div>
                                <div class="project-name">
                                    {{$post->title}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach



            </div>
        </div>
        <aside class="bg-dark">
            <div class="container text-center home-sections">
                <div class="row">
                  <div class="col-md-6 col-md-offset-1">
                    <h2>About us</h2>
                    <p>In healthyfoodhouse’s team are included many renowned nutritionists, and specialists from other areas of nutrition, which their extensive experience explain and transmit in this website.</p>
                    <div><a href="/about" class="btn btn-sm btn-default btn-xl sr-button">Find Out More</a></div>
                  </div>
                  <div class="col-md-4 col-md-offset-1">
                    <img src="{{asset('img/icons/logo2.png')}}" alt="logo" class="img-responsive img-thumbnail img-circle">
                  </div>
                </div>
            </div>
        </aside>
    </section>

@endsection
