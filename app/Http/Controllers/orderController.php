<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index()
    {
        return view('front.order.index');

    }
    public function paymentCheck(Request $request)
    {
        
    }
    public function shippingStore(Request $request)
    {
        dd($request->all());
    }
}
