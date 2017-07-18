{{-- this view will show up when user clicks on forget password --}}
@extends('main')
@section('title', '| Reset Password')
@section('body-content')
  <div class="container">
    <div class="row main-body-content">
      <div class="col-md-6 col-md-offset-3">
        <div class="form-group">
          <div class="panel panel-default">
            <div class="panel-heading"><h3 class="text-center">Reset Password</h3></div>
            <div class="panel-body">
              {{-- include csrf token if not using the form helper group: allows laravel to accept normal html5 forms --}}
              {!!Form::open(['url'=>'password/reset', 'method'=>"POST"])!!} {{-- this form will post to the password/reset --}}
                {{-- add a hidden field for the token: in the controller ,laravel passes 2var(token passed and email assoc with it) the token variable to check db --}}
                {{Form::hidden('token', $token)}}
                {{Form::label('email', 'Email Address:')}}
                {{Form::email('email', $email, ['class'=>'form-control'])}}

                {{Form::label('password', 'New Password: ')}}
                {{Form::password('password', ['class'=>'form-control'])}}

                {{Form::label('password_confirmation', 'Confirm New Password')}} {{--name needs to match up with that in the controller --}}
                {{Form::password('password_confirmation', ['class'=>'form-control'])}}

                {{Form::submit('Reset password', ['class'=>'btn btn-primary btn-block btn-submit'])}}

              {!!Form::close()!!}


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
