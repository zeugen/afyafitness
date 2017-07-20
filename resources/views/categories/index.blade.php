@extends('main')
@section('title', '| Categories')

@section('body-content')
  <div class="container top-margin">
    <div class="row">
      <div class="col-md-7">
        <h1>Categories</h1>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
              <tr> {{--row --}}

                <th>{{$category ->id}}</th>
                <td>{{$category ->name}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div> <!-- end of column -->
      <div class="col-md-4 col-md-offset-1">
        <div class="well well-sm">
          {!!Form::open(['route'=>'categories.store'])!!}
          <div class="form-group">
            <h2>New Category</h2>
          </div>
          <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', null, ['class'=>' form-control'])}}
          </div>
          <div class="form-group">
            {{Form::submit('Create New Category', ['class'=>'btn btn-block btn-success btn-submit'])}}
          </div>
          {!!Form::close()!!}
        </div>
      </div>
    </div>
  </div>
@endsection
