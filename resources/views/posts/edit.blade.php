@extends('main')
@section('title', '| Edit post')
@section('body-content')
  <div class="container top-margin">
    <div class="row">
      {{-- start form - this will tryto connect a form to the model object as picked from the db thus changes made on the form can be replicated on the db --}}
      {!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method' => 'PUT']) !!}
      <div class="col-md-8">
        <div class="form-group">
          {{Form::label('title', 'Title:')}}
          {{Form::text('title',null,['class'=>'form-control input-lg'])}}
        </div>
        <div class="form-group">
          {{Form::label('slug','Slug:')}}
          {{Form::text('slug', null, array('class'=>'form-control input-lg'))}}
        </div>

        <br>
        <div class="form-group">
          {{Form::label('body', 'Body:')}}
          {{Form::textarea('body',null,['class'=>'form-control'])}}
        </div>

      </div>
      <div class="col-md-4">
        <div class="well">
           <dl class="dl-horizontal">
             <dt>Created At:</dt>
             <dd>{{date('M j, Y h:ia ',strtotime($post-> created_at)) }}</dd>
           </dl>
           <dl class="dl-horizontal">
             <dt>Last Updated:</dt>
             <dd>{{date('M j, Y h:ia',strtotime($post-> updated_at))}}</dd>
           </dl>
           <hr>
           <div class="row">
             <div class="col-sm-6">
               {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn btn-block btn-submit btn-danger'))!!}

             </div>
             <div class="col-sm-6">
               {{Form::submit('Save Changes', ['class'=>'btn btn btn-block btn-success btn-submit'])}}

             </div>
           </div>

        </div>
      </div>
      {!! Form::close() !!}
      {{-- end form --}}
    </div>
  </div>
@endsection
