<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function account(){
        $user = Auth::user();
        $orders = Order::where('user_id', 'LIKE', $user->id)->get();
        $data = [
            'user' => $user,
            'orders' => $orders,
        ];
        return view('user.account', $data);
    }


}
