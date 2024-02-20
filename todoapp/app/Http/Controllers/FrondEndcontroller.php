<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\User;
use App\Http\Middleware;
use App\Models\UserAddress;
use App\Http\Controllers\required;
use Illuminate\Support\Facades\Auth;

// Your controller code here

// Your controller code here

class FrondEndcontroller extends Controller
{
    //

public function viewlogin(){
    return view('login');
}



public function userLogedin(){
        

    $user = ['email'=> request('email'), 'password'=> request('password')];

        if(auth()->attempt($user, true)){
            return redirect()->route('create');
        }else{
            return redirect()->route('loginpage')->with('message', 'user is invalid');
        }
}



public function create(){

   
    return view('createtodo');
}

public function todo(){

    $data = Todo::create(['task' => request ('todotask'), 'date' => request('date'),'time' => request('time')]);
      
    return redirect()->route('create')->with('message', 'successfully add your task');
}
    
public function list(){
    $todos = Todo::latest()->get();
    return view('todolist',compact('todos'));
}

public function delete($id){
    $delete = Todo::find($id);
    $delete->delete();

    return redirect()->route('todolist')->with('message', 'Task deleted');

}

public function logout(){
    auth()->logout();
    return redirect()->route('loginpage');
}


    

    
               

}
