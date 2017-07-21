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
      <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <h1>Welcome to AfyaFitness</h1>
                <p>Thank you so much for visiting</p>
                <p> We help people everywhere look good, feel good, do good in order to live more fulfilling lives every day.</p>
                <hr>
              </div>
              <div class="col-md-4 col-md-offset-1">
                <img src="{{asset('img/icons/logo2.png')}}" alt="afyafitness logo" class="img-responsive">
              </div>
            </div>
          </div>

        </div>

      </div> <!-- /container -->

      <!-- ENTER 5 RECENT ARTICLE POSTS -->
      <div class="content-wrapper">
        <div class="container">
          <div class="row">
            <!-- main content -->
            <main class="col-md-8">
              @foreach($posts as $post)

              <div class="row article-body">
                <section class="col-sm-12 col-md-12">
                  <header>
                    <!-- category marker and link -->
                    <div class="category"><a href="#">

                      <span>
                        <i class="fa fa-tag" aria-hidden="true"></i>
                        Nutrition
                        </span></a>
                      </div>
                      <!-- contributor avatar,name, subtag,date of upload -->
                      <div class="contributor">
                        <img src="{{asset('img/roger.jpg')}}" alt="" class="avatar img-responsive img-circle">
                        <div class="avatar-name">
                          <h2>In <a href="">Recipes</a> by <a href="#">Rogers Momanyi</a></h2>
                          <p class="upload-date">May 17.</p>
                        </div>
                      </div>

                      <!-- Article title -->
                      <div class="title"><h1>{{$post->title}}</h1><hr></div>
                      <!-- article thumbnail -->
                      <article class="article-thumb"> <img src="{{asset('img/smoothies.jpg')}}" alt="intuitive eating" class="img-responsive">

                      </article>
                      <!-- article readmore -->
                      <div class="article-read-more ">
                        <hr>
                        <p class="">{{substr(strip_tags($post->body), 0 , 200)}}{{strlen(strip_tags($post->body))>200 ? " ..." : ""}}</p>
                        <hr>
                        <a href="{{ url('article/'.$post->slug) }}" >Read more ...</a></div>
                      {{-- <!-- article footer -->
                      <footer class="article-footer">
                        <span class="likes">
                          <a href="" >
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            400
                          </a>

                        </span>
                        <span class="responses pull-right">
                          <a href="" >23 responses </a>
                          <a href="" class="bookmark"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a>
                          <a href="" class="share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </span>
                      </footer> --}}


                  </header>

                </section>
              </div>
              @endforeach

            </main>
            <!-- sidebar -->
            <aside class="col-md-4">
              <header>
                <h3>Your Daily Picks</h3>
              </header>
            </aside>
          </div>
        </div>
    </div>

@endsection
