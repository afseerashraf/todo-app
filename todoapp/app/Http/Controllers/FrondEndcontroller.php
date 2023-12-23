<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\User;
use App\Http\Middleware;
use App\Models\UserAddress;

// Your controller code here

// Your controller code here

class FrondEndcontroller extends Controller
{
    //

    public function login(){
        
         return view('login');
}
    public function userLogin(){


        validator(request()->all(),[
            'user_name' => ['required', 'username'],
            'password' => ['required', 'password']
        ])->validate();

        if(auth()->attempt(request()->only(['username', 'password']))){
            return redirect()->route('create');
        }else{
             return redirect()->route('login')->with('message', 'invalid login data');

        }


        // $user = User::create(['user_name' => request('username'), 'password' => request('password'),]);
        // if(auth()->attempt($user)){
            
        //     return redirect()->route('create');

        // }else{
        //         return redirect()->route('login')->with('message', 'invalid login data');
        // }
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
        $task = Todo::find($id);
        $task->delete();

        return redirect()->route('todolist')->with('message', 'Task deleted');

    }

    public function logout(){
        auth()->logout();
        return redirect()->route('Login');
    }


    public function address(){

     

        $user = User::find(1);

        return view('userAddress', compact('user'));
    }
}
