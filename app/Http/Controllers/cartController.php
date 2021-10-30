<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart ;
use Auth ;

class cartController extends Controller
{
    public function index()
    {
        $carts = Cart::where(['user_id' => Auth::id()])->get();

        return view('front.cart.index',['items' => $carts]);
    }
    public function delete($id)
    {
        $item = Cart::where('id',$id)->first();
        if($item)
        {
            $item->delete();
        }
        return redirect()->back();

    }



    public function addcart( Request $request,$id = null )
    {
        $existscart = Cart::where(['product_id'=> $id , 'user_id' => Auth::id()])->exists();
        if(!$existscart)
        {
            if(Auth::id() == null)
            {
                return redirect()->route('user.login');
            }
            $productexist = Cart::where('product_id',$id)->first();
            if($productexist )
            {
                return redirect()->back();
            }
           
            $data['product_id'] = $id ;

            $data['user_id'] = Auth::id();
            $data['quantity'] = $request->quantity ? $request->quantity : 1 ;

            Cart::create($data);
            return redirect()->back();
        }
        return redirect()->back();
    }
}
