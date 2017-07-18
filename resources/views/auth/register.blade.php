@extends('main')
@section('title', '| Register')

@section('body-content')
  <div class="container">
    <div class="row main-body-content">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="">Register</h1>
        <hr>
      </div>
    </div>
    <div class="row ">
      <div class="col-md-6 col-md-offset-3">

        {!!Form::open()!!}
          <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', null, ['class'=>'form-control'])}}

          </div>
          <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::email('email', null, ['class'=>'form-control'])}}
          </div>

          <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::password('password', ['class'=>'form-control'])}}
          </div>
          <div class="form-group">
            {{Form::label('password_confirmation', 'Confirm Password')}}
            {{Form::password('password_confirmation', ['class'=>'form-control'])}}
          </div>
          <div class="form-group">
            {{Form::submit('Register', ['class'=>"form-control btn btn-block btn-primary btn-submit"])}}

          </div>

        {!!Form::close()!!}
      </div>
    </div>
  </div>
@endsection
