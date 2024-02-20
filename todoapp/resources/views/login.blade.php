@extends('layout')

@section('content')




@if(session()->has('message'))<p> {{session()->get('message')}}</p>@endif
<form action="{{route('user.Login')}}" method="post" autocomplete="off">
  @csrf

  <div class="col-md-3">
    <label for="eusername" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="col-md-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <hr>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label" for="remember">
                Remember Me
            </label>
    
  <button type="Login" class="btn btn-primary">Login</button>
</form>



@endsection

