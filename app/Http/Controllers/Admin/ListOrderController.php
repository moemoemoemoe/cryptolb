<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class ListOrderController extends Controller
{
    public function __invoke(){

 $orders = Order::paginate(5);

 return view('admin.index' , compact('orders'));

    }
}
