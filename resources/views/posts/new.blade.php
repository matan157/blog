@extends('../master')
<div class="col-lg-3 col-lg-offset-4">
  <h1>New Post</h1>
  <form method="POST" action="/store">
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
      <input type="text" name="title" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" class="form-control" rows="3" placeholder="Today I slept."></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
