@extends('layout')
@section('content')

<table class="table table-warning">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">task</th>
      <th scope="col">date</th>
      <th scope="col">time</th>
      <th scope="col">actions</th>



    </tr>
  </thead>
  <tbody>
  @foreach($todos as $todo)

    <tr>

        <td>{{$todo->id}}</td>
        <td>{{$todo->task}}</td>
        <td>{{$todo->date}}</td>
        <td>{{$todo->time}}</td>
        <td><a href="{{route('delete',['id' => $todo->id])}}" class="btn btn-success">delete
           <a href="{{route('create')}}" class="btn btn-primary">Add task
        </td>




    </tr>
    @endforeach

  </tbody>
</table>
@endsection