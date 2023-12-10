@extends('layout')

@section('content')

<div>
   
    <ul>
        <li>user_name: {{$user->user_name}}</li>
        
    </ul>
   
</div>
<div>
    <h1>User Detiles</h1>

   
        <h2>Address</h2>
        <ul>
            <li>Address id : {{$user->address->address_id}}</li>
            <li>user Id: {{$user->address->user_id}}  <p>(Foregin key)</p></li>
            <li>Address Line: {{$user->address->address_line}}</li>
            <li>City : {{$user->address->city}}</li>
            <li>post code : {{$user->address->post_code}}</li>
            <li>State : {{$user->address->state}}</li>
        </ul>
       
</div>



@endsection