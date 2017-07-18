@extends('main')
@section('title','| create new post')
@section('body-content')
  <div class="container top-margin">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2>Create new article</h2>
        <hr class="intro-divider">
        {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
            {{Form::label('title','Title:')}}
            {{Form::text('title',null, array('class' => 'form-control','required' => '', 'maxlength' => '255'))}}

            {{Form::label('slug', 'Slug:')}}
            {{Form::text('slug', null, array('class'=>'form-control', 'required'=>'','minlength'=>'5', 'maxlength'=>'255'))}}

            {{Form::label('body',"Post Body:")}}
            {{Form::textarea('body', null,array('class'=>'form-control', 'required' => ''))}}

            {{Form::submit('Create Post', array('class' =>'btn btn-success btn-lg btn-block' ))}}


        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
