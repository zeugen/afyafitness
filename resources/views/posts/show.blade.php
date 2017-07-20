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
              <label>URL :</label>
              <p><a href="{{url('article/'.$post->slug) }}">{{url('article/'.$post->slug)}}</a></p>   {{--   append base url to the post slug --}}
            </dl>
            <dl class="dl-horizontal">
              <label>Category :</label>
              <p>{{$post->category->name }}</p>   {{--   append base url to the post slug --}}
            </dl>
             <dl class="dl-horizontal">
               <label>Created At:</label>
               <p>{{date('M j, Y h:ia ',strtotime($post->created_at)) }}</p>
             </dl>
             <dl class="dl-horizontal">
               <label>Last Updated:</label>
               <p>{{date('M j, Y h:ia',strtotime($post->updated_at))}}</p>
             </dl>
             <hr>
             <div class="row">
               <div class="col-sm-6">
                 {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn btn-block btn-primary btn-submit'))!!}

               </div>
               <div class="col-sm-6">
                 {!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE'])!!}
                 {!! Form::submit('Delete', ['class'=>'btn btn btn-block btn-danger btn-submit'])!!}

                 {!! Form:: close()!!}
               </div>
             </div>
             <div class="row">
               <div class="col-md-12">
                 {{Html::linkRoute('posts.index','<< See All Articles', [], ['class'=> ' btn btn-default btn-block btn-submit'])}}
               </div>
             </div>

          </div>
        </div>
      </div>
    </div>

@endsection
