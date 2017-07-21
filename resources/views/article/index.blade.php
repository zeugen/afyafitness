@extends('main')
@section('title','|Articles')
@section('body-content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>ARTICLES</h1>
      </div>
    </div>

    @foreach ($posts as $post)

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2>{{$post->title}}</h2>
        <h5>Published: {{date('M j ,Y',strtotime($post->created_at))}} </h5>
        <br>
        <p class="lead">{{ substr(strip_tags($post->body), 0, 250) }} {{strlen(strip_tags($post->body))>250 ? '...' :''}}</p>
        <a href="{{route('article.single', $post->slug) }}">Read More</a>
      </div>

    </div>
    <hr>
    @endforeach
    <div class="row col-md-12">
      <div class="text-center">
        {!!$posts->links()!!}
      </div>
    </div>
  </div>
@endsection
