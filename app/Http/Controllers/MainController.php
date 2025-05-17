<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class MainController extends Controller
{
    public function index(){
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('welcome', compact('orders'));
    }
}
