<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Order;
use Redirect;
use Illuminate\Support\Facades\Input;


class FrontOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required|digits:8',
            'city' => 'required',
            'amount' => 'required'];
            $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            
            
             return redirect()->back()->withErrors($validator)->withInput($request->all());

        }
        else
        {
             $data = $request->input();
            try{
                $order = new Order;
                $order->full_name = $data['first_name'] .' '.$data['last_name'];
                $order->email = $data['email'];
                $order->mobile = $data['mobile'];
                $order->city = $data['city'];

                $order->address = $data['address'];
                $order->amount = $data['amount'];
                $order->role = $data['hidden'];
                $order->date_of_order = now();
                $order->status = 0;

                
                $order->save();
                  return redirect()->back()->with('success' , 'Your Order is Submited we Contat you As soon');

        
            }
            catch(Exception $e){
                   return redirect()->back()->with('errors' , 'error occurate');
               
                          

            }
        }

            
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
