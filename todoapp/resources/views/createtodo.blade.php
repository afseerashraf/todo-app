@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('css/createtodo.css')}}">



<div class="align">
<div class="continer-fluid-md-6">
    <h4>Welcome {{$user->user_name}}</h4>
    <form action="{{route('todotask')}}" method="post">
        @csrf

 <div class="row">
    <div class="col-lg-3">
<input class="form-control" type="text" placeholder="task" aria-label="default input example" name="todotask" required>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3">
    
    <input class="form-control" type="date" id="date" placeholder="date" name="date" required >
</div>
</div>

<div class="row">
<div class="col-lg-3">
    
    <input class="form-control" type="time" id="time" placeholder="time" name="time" required>
    <select name="ampm" class="form-select">
        <option value="am">AM</option>
        <option value="pm">PM</option>
    </select>
</div>
</div>

    <div class="row">
    <div class="col-md-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-md-3">
    <a href="{{route('todolist')}}"><button type="button" class="btn btn-success">view task</button>
    </div>
    <div class="co-md-3">
        <a href="{{route('logout.user')}}"><button type="button" class="btn btn-danger">Logout</button>

    </div>
    </div>
    

    </form>
</div>
</div>
@endsection
