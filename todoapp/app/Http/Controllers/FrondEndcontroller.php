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

    
    public function login(){

        $user = 
        return view('login');
}


 public function userLogedin(){
        

    $input = ['user_name' => request('username'), 'password' => bcrypt(request('password'))];
    if(auth()->attempt($input)){
        
        return redirect()->route('create');

    }else{
            return redirect()->route('loginpage')->with('message', 'invalid login data');
    }

     
}



    public function create(){

        $user = User::find(1);
        return view('createtodo', compact('user'));
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
        return redirect()->route('Login');
    }


    public function address(){

     

        $user = User::find(1);

        return view('userAddress', compact('user'));
    }


    
               

}
