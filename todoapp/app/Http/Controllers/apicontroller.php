<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class apicontroller extends Controller
{
    //
    public function getuser(){
        $userId = request('user_id');
        $user = User::find($userId);
        return response()->json([
            'status' => 200,
            'data' => [
                'profile' => $user,
                'orders' => $user->orders,
                'address' => $user->address,
            ],
            'message'=> 'use delete successfully',
        ]);
    }
}
