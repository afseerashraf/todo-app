@extends('layout')
@section('content')




<p>@if(session()->has('message')) session()->get('message')@endif</p>
<form action="{{route('Login')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="eusername" class="form-label">Username</label>
    <input type="text" class="form-control" id="eusername" name="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label" for="remember">
                Remember Me
            </label>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection

