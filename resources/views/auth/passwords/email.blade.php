{{-- this view will show up when user clicks on forget password --}}
@extends('main')
@section('title', '| Forgot my password')
@section('body-content')
  <div class="container">
    <div class="row main-body-content">
      <div class="col-md-6 col-md-offset-3">
        <div class="form-group">
          <div class="panel panel-default">
            <div class="panel-heading"><h3 class="text-center">Reset Password</h3></div>
            <div class="panel-body">
              {{-- include csrf token if not using the form helper group: allows laravel to accept normal html5 forms --}}
              @if (session('status'))
                <div class="alert alert-success">
                  {{session('status')}}
                </div>
              @endif
              {!!Form::open(['url'=>'password/email', 'method'=>"POST"])!!} {{-- this form will post to the password/email --}}

                {{Form::label('email', 'Email Address:')}}
                {{Form::email('email',null, ['class'=>'form-control'])}}

                {{Form::submit('Reset password', ['class'=>'btn btn-primary btn-block btn-submit'])}}
              {!!Form::close()!!}


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
