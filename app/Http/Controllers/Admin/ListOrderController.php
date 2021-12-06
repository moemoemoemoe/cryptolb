<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class ListOrderController extends Controller
{
    public function __invoke(){

 $orders = Order::orderBy('id','DESC')->paginate(10);

 return view('admin.index' , compact('orders'));

    }
}
