<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Redirect;

class ListOrderController extends Controller
{
    public function __invoke(){

 $orders = Order::orderBy('id','DESC')->paginate(10);

 return view('admin.index' , compact('orders'));

    }

     public function update_status($id)
    {
        $order = Order::findOrFail($id);
     if($order->status == '0')
     {
       $order->status = '1';
       $order->save();
       return Redirect::Back()->with('success', 'This order is Published');
     }
     else{
      $order->status = '0';
      $order->save();
      return Redirect::Back()->with('success', 'This order is Unpublished');
    }
    }
}
