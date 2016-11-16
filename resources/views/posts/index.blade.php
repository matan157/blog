@extends('../master')

@section('content')
  @if (count($posts) === 0)
    <h1>No Posts</h1>
  @else
    <h1>Posts: <small><a href="/new" class="btn btn-primary">New Post</a></small></h1>
    @foreach($posts as $post)
      <div class="row">
        <div class="col-lg-3">
          <h1>{{ $post->title }}</h1>
          <p>
            {{ $post->body }}
          </p>
          <a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a> &nbsp; <a href="/edit/{{$post->id}}" class="btn btn-primary">Edit</a>
        </div>
      </div>
    @endforeach
  @endif


@endsection
