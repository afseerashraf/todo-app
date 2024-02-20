@extends('layout')
<link rel="stylesheet" href="{{asset('css/todolist.css')}}">
@section('content')


<a href="{{route('create')}}" class="btn btn-primary" id="btn1">Add task</a>
<br>

<div class="container">
<table class="table table-warning">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">task</th>
      <th scope="col">date</th>
      <th scope="col">time</th>
      <th scope="col">Delete</th>



    </tr>
  </thead>
  <tbody>
  @foreach($todos as $todo)

    <tr>

        <td>{{$todo->id}}</td>
        <td>{{$todo->task}}</td>
        <td>{{$todo->date}}</td>
        <td>{{$todo->time}}</td>
        <td><a href="{{route('delete',['id' => $todo->id])}}" class="btn btn-danger" id="btndlt">delete</a>
        </td>




    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection