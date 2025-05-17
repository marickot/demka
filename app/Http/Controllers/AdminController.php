<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Description;
class AdminController extends Controller {
    public function changeStatus(Request $request, $order){
        $order = Order::select()->where('id', $order)->first();
        $order->status = $request->status;
        $order->save();
        if ($request->status == 'отклонено'){
            $desc = new Description;
            $desc->order_id = $order->id;
            $desc->description = $request->description;
            $desc->save();
        }
        return redirect('/admin');
    }
}
