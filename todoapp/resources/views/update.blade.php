@extends('layout')

@section('content')



<div class="align">
<div class="continer-fluid-md-6">
    <form action="{{route('updated')}}" method="post">
        @csrf
        <input type="hidden" name="todo_id" value="{{ encrypt($todo->id) }}">
 <div class="row">
    <div class="col-lg-3">
<input class="form-control" type="text" placeholder="task" aria-label="default input example" name="todotask" value="{{$todo->task}}" required>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3">
    <input class="form-control" type="date" id="date" placeholder="date" name="date" value="{{$todo->date}}" required >
</div>
</div>

<div class="row">
<div class="col-lg-3">
    
    <input class="form-control" type="time" id="time" placeholder="time" name="time" value="{{$todo->time}}" required>
    <select name="ampm" class="form-select">
    <option value="am" {{ isset($todo) && $todo->ampm == 'am' ? 'selected' : '' }}>AM</option>
    <option value="pm" {{ isset($todo) && $todo->ampm == 'pm' ? 'selected' : '' }}>PM</option>
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
    
    </div>
    

    </form>
</div>

</div>
@endsection
