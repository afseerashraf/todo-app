<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\User;

// Your controller code here

// Your controller code here

class FrondEndcontroller extends Controller
{
    //

    public function login(){
         return view('login');
}
    public function userLogin(){


        $input = User::create(['user_name' => request('username'), 'password' => request('password')]);
        if(auth()->attempt($input)){
            
            return redirect()->route('create');

        }else{
                return redirect()->route('login')->with('message', 'invalid login data');
        }
    }


    public function create(){
        return view('createtodo');
    }

    public function todo(){
        $data = Todo::create(['task' => request('todotask'), 'date' => request('date'),'time' => request('time')]);
        return redirect()->route('create')->with('message', 'successfully add your task');
    }
    public function list(){
        $todos = Todo::latest()->get();
        return view('todolist',compact('todos'));
    }

    public function delete($id){
        $task = Todo::find($id);
        $task->delete();

        return redirect()->route('viewtodo')->with('message', 'Task deleted');

    }
}
