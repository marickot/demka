<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function create(Request $values){
        $order = new Order;
        $order->create([
         'name'=> $values->name, 'phone' => $values->phone, 'user_id' => Auth::user()->id,
         'address' => $values->address, 'date' => $values->date,
          'time' => $values->time, 'type' => $values->type,
          'type_of_payment' => $values->type_of_payment
        ]);
       return redirect('/');
    }

}
