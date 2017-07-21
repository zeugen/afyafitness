@extends('main')
<?php $titleTag= htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('body-content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>{{$post->title}}</h1>
        <p>{!! $post->body !!}</p>
        <hr>
        <p>Posted In: <span>{{$post->category->name}}</span></p>

      </div>
    </div>
    {{-- view comment section --}}
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <h1>Comments about this article</h1>
        <hr>

        @foreach ($post->comments as $comment)
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><strong>Name: </strong>{{$comment->name}}</h3>
            </div>
            <div class="panel-body">
              <p class="comment-body"><strong>Comment: </strong><br> {{$comment->comment}}</p>
            </div>

          </div>

        @endforeach
      </div>
    </div>
    {{-- add comment seciton --}}
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <hr>
        <H2>Leave a comment</H2>
        <hr>
        <div id="comment-form">
          {{Form::open(['route'=> ['comments.store', $post->id], 'method'=>'POST'])}}

            <div class="form-group">
              {{Form::label('name', 'Name')}}
              {{Form::text('name', null, ['class'=>'form-control'])}}

            </div>

            <div class="form-group">
              {{Form::label('email','Email')}}
              {{Form::text('email',null, ['class'=>'form-control'])}}

            </div>
            <div class="form-group">
              {{Form::label('comment', 'Comment')}}
              {{Form:: textarea('comment',null, ['class'=>'form-control', 'rows'=>'5'])}}

            </div>
            <div class="form-group">
              {{Form::submit('Add Comment', ['class'=>'btn btn-block btn-primary btn-submit'])}}

            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>

  </div>

@endsection
