@extends ('layout')

@section ('content')

<h1> Register </h1>
<form method="post" action="/register">
	{{csrf_field()}}
  <div class="form-group">
    <label for="Name">Name</label>
    <input name="name"  type="text" class="form-control" id="Name" placeholder="Name" required="">
  </div>
  <div class="form-group">
    <label for="E-mail">E-mail</label>
    <input name="email"  type="text" class="form-control" id="E-mail" placeholder="E-mail" required="">
  </div>
 
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password"  type="password" class="form-control" id="password" placeholder="password" required="">
  </div>
  
  <div class="form-group">
    <label for="password_confirmation">Password Confirmation</label>
    <input name="password_confirmation"  type="password" class="form-control" id="password_confirmation" placeholder="Congirm password" required="">
  </div>

  <div class="form-group">
   <button type="submit" class="btn btn-primary">Register</button>
</div>
</form>
@include ('layouts.errors')


@endsection