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

            {{Form::label('category_id', 'Category: ')}}
            <select class="form-control" name="category_id">
              <!-- dynamically render this field from db -->
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>

            {{Form::label('body',"Post Body:")}}
            {{Form::textarea('body', null,array('class'=>'form-control', 'required' => ''))}}

            {{Form::submit('Create Post', array('class' =>'btn btn-success btn-lg btn-block' ))}}


        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
@section('scripts')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>
    tinymce.init({ selector:'textarea',
                  plugins: 'link',
                  menubar: false,
                  plugins: "textcolor colorpicker"

     });
   </script>
@endsection
