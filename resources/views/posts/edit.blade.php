@extends('../master')

@section('content')
  <h1>Edit Post</h1>
  <hr />
  <form method="POST" action="/update/{{ $post->id }}">
    {{ csrf_field() }}
    @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach
      </div>
    @endif
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" value="{{$post->title}}" name="title" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" class="form-control" rows="3" placeholder="Today I slept.">{{$post->body}}</textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection
