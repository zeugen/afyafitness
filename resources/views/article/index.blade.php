@extends('main')
@section('title','|Articles')
@section('body-content')
  <header id="articles-page" class="page-header">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="page-heading">
                      <h1>Articles</h1>
                      <hr class="small">
                      <span class="subheading">Indulge Yourself.</span>
                  </div>
              </div>
          </div>
      </div>
  </header>


  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">

            <h1 class="text-center">ARTICLES</h1>
            <hr class="divider-lg">
          </div>
        </div>

        @foreach ($posts as $post)

          <div class="row article-body">
            <section class="col-sm-12 col-md-12">
              <header>
                <!-- category marker and link -->
                <div class="category"><a href="#">

                  <span>
                    <i class="fa fa-tag" aria-hidden="true"></i>
                    {{$post->category->name}}
                    </span></a>
                  </div>
                  <!-- contributor avatar,name, subtag,date of upload -->
                  <div class="contributor">
                    <img src="{{asset('img/roger.jpg')}}" alt="" class="avatar img-responsive img-circle">
                    <div class="avatar-name">
                      <h2>In <a href="#">{{$post->category->name}}</a> by <a href="#">Rogers Momanyi</a></h2>
                      <p class="upload-date">{{date('M j ,Y',strtotime($post->created_at))}}</p>
                    </div>
                  </div>

                  <!-- Article title -->
                  <div class="title"><h1>{{$post->title}}</h1>

                  </div>
                  <!-- article thumbnail -->
                  <hr class="hr-article">
                  <article class="article-thumb"> <img src="{{asset('images/'. $post->image)}}" alt="" class="img-responsive">

                  </article>
                  <!-- article readmore -->
                  <div class="article-read-more ">
                    <hr>
                    <p class="">{{substr(strip_tags($post->body), 0 , 200)}}{{strlen(strip_tags($post->body))>200 ? " ..." : ""}}</p>
                    <hr class="hr-article">
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
        <hr>
        @endforeach
        <div class="row col-md-12">
          <div class="text-center">
            {!!$posts->links()!!}
          </div>
        </div>
      </div>
      <aside class="col-md-4">
        <header>
          <h3>Your Daily Picks</h3>
        </header>
      </aside>
      </div>

    </div>

@endsection
