@extends('main')
@section('title','| all posts')
@section('body-content')
  <div class="container top-margin">
    <div class="row">
      <div class="col-md-8">
        <h1>All Posts</h1>

      </div>
      <div class="col-md-4">
        <a href="{{route('posts.create')}}" class="btn btn-primary btn-block btn-lg crud-btn">Create New Post </a>
      </div>
      <div class="col-md-12">
        <hr>
      </div>
    </div>
    {{-- endrow --}}
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <th>#</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created at</th>
            <th></th>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <th>{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{substr($post->body, 0, 50)}}{{strlen($post->body)>50 ?"...": ""}}</td>
                <td>{{date('M j, Y', strtotime($post->created_at))}}</td>
                <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-default">View</a><a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-default">Edit</a></td>

              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
