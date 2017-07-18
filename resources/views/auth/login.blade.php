@extends('main')
@section('title', '| Login')

@section('body-content')
    <div class="container ">
      <div class="row main-body-content">
        <div class="col-md-6 col-md-offset-3">
          <h1 class="">Login</h1>
          <hr>
        </div>
      </div>
      <div class="row ">
        <div class="col-md-6 col-md-offset-3">
          {!! Form::open() !!}

          <div class="form-group">
            {{Form::label('email','Email')}}
            {{ Form::email('email', null , ['class' => 'form-control']) }}
          </div>
          <div class="form-group">
            {{Form::label('password','password')}}
            {{Form::password('password', ['class'=> 'form-control'])}}
          </div>
          <div class="form-group">
            {{Form::checkbox('remember')}}{{Form::label('remember','Remember')}}
          </div>

          <div class="form-group">
            {{Form::submit('login', ['class'=>'btn btn-primary btn-block btn-submit'])}}
          </div>

          <div class="form-group">
            <a href="{{url('password/reset')}}">Forgot Password ?</a>
          </div>

          {!! Form::close()!!}


        </div>
      </div>
    </div>

@endsection
