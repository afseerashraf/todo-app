@extends('layout')
@section('content')

<div class="continer-fluid-md-6">
    <form action="{{route('todotask')}}" method="post">
        @csrf

 <div class="row">
    <div class="col-lg-3">
<input class="form-control" type="text" placeholder="Enter what todo" aria-label="default input example" name="todotask">
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3">
    
    <input class="form-control" type="date" id="date" placeholder="date" name="date">
</div>
</div>

<div class="row">
<div class="col-lg-3">
    
    <input class="form-control" type="time" id="time" placeholder="time" name="time">
    <select name="ampm" class="form-select">
        <option value="am">AM</option>
        <option value="pm">PM</option>
    </select>
</div>
</div>

    <div class="row">
    <div class="col-lg-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-lg-3">
    <a href="{{route('viewtodo')}}"><button type="button" class="btn btn-success">view task</button>
    </div>
    </div>
    

    </form>
</div>
@endsection
