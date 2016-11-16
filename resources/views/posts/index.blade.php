@extends('../master')

@section('content')
  @if (count($posts) === 0)
    <h1>No Posts</h1>
    <hr />
  @else
    <h1>Posts:</h1>
    <h3><a href="/new">Add a new post?</a></h3>
    <hr />
    @foreach($posts as $post)
      <h3>{{ $post->title }}</h3>
      <p> {{ $post->body }} </p>
      <p>
        <a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a>
        <a href="/edit/{{$post->id}}" class="btn btn-primary">Edit</a>
      </p>
      <hr />
    @endforeach
  @endif


@endsection
