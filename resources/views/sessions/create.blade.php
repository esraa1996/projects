@extends ('layout')

@section ('content')

<h1> Sign In </h1>
<form method="post" action="/login">
  {{csrf_field()}}
 
  <div class="form-group">
    <label for="E-mail">E-mail : </label>
    <input name="email"  type="text" class="form-control" id="E-mail" placeholder="E-mail" required="">
  </div>
 
  <div class="form-group">
    <label for="password">Password : </label>
    <input name="password"  type="password" class="form-control" id="password" placeholder="password" required="">
  </div>
  
  

  <div class="form-group">
   <button type="submit" class="btn btn-primary">Login</button>
</div>
</form>
@include ('layouts.errors')


@endsection