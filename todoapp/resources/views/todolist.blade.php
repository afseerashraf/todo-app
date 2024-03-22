@extends('layout')
<link rel="stylesheet" href="{{asset('css/todolist.css')}}">
@section('content')


<br>

<div class="container">
  @if(session()->has('updated')) <p>{{session()->get('updated')}}</p> @endif
<table class="table table-warning">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">task</th>
      <th scope="col">date</th>
      <th scope="col">time</th>
      <th scope="col">update</th>
      <th scope="col">Delete</th>
      <th scope="col">Add task</th>




    </tr>
  </thead>
  <tbody>
  @foreach($todos as $todo)

    <tr>

        <td>{{$todo->id}}</td>
        <td>{{$todo->task}}</td>
        <td>{{$todo->date}}</td>
        <td>{{$todo->time}}</td>
        <td> <a href="{{route('update', encrypt($todo->id))}}" class="btn-success">Update</a> </td>
        <td><a href="{{route('delete',['id' => $todo->id])}}" class="btn btn-danger" id="btndlt">delete</a>
        <td>
        <a href="{{route('create')}}" class="btn btn-primary" id="btn1">Add task</a>

        </td>
        </td>




    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection