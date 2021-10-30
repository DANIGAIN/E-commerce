<?php

namespace App\Http\Controllers;

use\App\Models\Discount;

use Illuminate\Http\Request;
use App\Http\Requests\discountRequest ;
use App\Http\Controllers\FileUploadController;

class discountController extends Controller
{

    private $fileuplodecontroller ;
    public function __construct(FileUploadController $fileuplodecontroller)
    {
        $this->fileuplodecontroller = $fileuplodecontroller ;
    }
    public function index()
    {
        $discount = Discount::orderby('id','desc')->first();
        //dd($discount);

        return view('admin.discount.index',['discount' => $discount]);
    }

    public function create()
    {
        return view('admin.discount.create');
    }

    public  function store(Request $request)
    {
        app(discountRequest::class);

        // dd($request->men );

        if($request->big_offer_image)
        {
            $data['big_offer_image'] =app(FileUploadController::class)->fileUplode($request->big_offer_image, 'images');
        }
        $data['big_offer'] = $request->big_offer;

        if($request->small_offer_top_image)
        {
            $data['small_offer_top_image']  = app(FileUploadController::class)->fileUplode($request->small_offer_top_image,'images');
        }
        $data['small_offer_top'] = $request->small_offer_top ;

        if($request->small_offer_bottom_image)
        {
            $data['small_offer_bottom_image'] = app(FileUploadController::class)->fileUplode($request->small_offer_bottom_image,'images');
        }
        $data['small_offer_bottom'] = $request->small_offer_bottom ;
      
        $discount = Discount::first();

        if($discount)
        {
            $discount->update($data);
        }else 
        {
            Discount::create($data);
        }
            return redirect()->route('discount.index');   
      
      
    }


    public function update(Request $request)
    {
         $discount = Discount::first();
        

         if($request->big_offer_image)
        {
            $data['big_offer_image'] = app(FileUploadController::class)->fileUplode($request->big_offer_image, 'images');
        }
        $data['big_offer'] = $request->big_offer?  $request->big_offer: $discount->big_offer ;

        if($request->small_offer_top_image)
        {
            $data['small_offer_top_image'] = app(FileUploadController::class)->fileUplode($request->small_offer_top_image,'images');
        }
        $data['small_offer_top'] = $request->small_offer_top?$request->small_offer_top : $discount->small_offer_top;

        if($request->small_offer_bottom_image)
        {
            $data['small_offer_bottom_image'] = app(FileUploadController::class)->fileUplode($request->small_offer_bottom_image,'images');
        }
        $data['small_offer_bottom'] = $request->small_offer_bottom ?  $request->small_offer_bottom : $discount->small_offer_bottom ;
      
        $discount = Discount::first();

        if($discount)
        {
            $discount->update($data);

        }

            return redirect()->route('discount.index');

    }


     public function delete($id)
     {
        $discount = Discount::where('id',$id)->first();
        if($discount)
        {
             $discount->delete();
             return redirect()->route('discount.index'); 
        }
        
        return redirect()->back();
    }  

    public function edit($id)
    {
        $discount = Discount::where('id',$id)->first();
        if($discount)
        {
            return  view('admin.discount.edit',['discount'=> $discount]);
        }
    }

    public function show($id)
    {
        return redirect()->route('home');
    }
}
