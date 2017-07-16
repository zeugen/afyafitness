@extends('main')
@section('title', '| view post')
@section('body-content')
    {{-- layout stucture for show posts --}}
    {{-- post-intro-header- fullwidth post image >> heading>postbody>slags/category>commenting>footer --}}
    <div class="container top-margin">
      <div class="row">
        <div class="col-md-8">
          <h1>{{$post-> title}}</h1>
          <br>
          <p>{{$post-> body}}</p>
        </div>
        <div class="col-md-4">
          <div class="well">
             <dl class="dl-horizontal">
               <dt>Created At:</dt>
               <dd>{{date('M j, Y h:ia ',strtotime($post->created_at)) }}</dd>
             </dl>
             <dl class="dl-horizontal">
               <dt>Last Updated:</dt>
               <dd>{{date('M j, Y h:ia',strtotime($post->updated_at))}}</dd>
             </dl>
             <hr>
             <div class="row">
               <div class="col-sm-6">
                 {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn btn-block btn-primary'))!!}

               </div>
               <div class="col-sm-6">
                 {!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE'])!!}
                 {!! Form::submit('Delete', ['class'=>'btn btn btn-block btn-danger'])!!}

                 {!! Form:: close()!!}
               </div>
             </div>

          </div>
        </div>
      </div>
    </div>

@endsection
