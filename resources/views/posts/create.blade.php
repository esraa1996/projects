@extends ('layout')

@section ('content')

<h1> Create Post </h1>
<form method="post" action="/posts">
	{{csrf_field()}}
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input name="title"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Post Title">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
   <button type="submit" class="btn btn-primary">Publish</button>
</div>
</form>
@include ('layouts.errors')


@endsection