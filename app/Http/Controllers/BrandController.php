<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand ;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\brandRequest;


class BrandController extends Controller
{
    public function brandIndex()
    {
        $brands  = Brand::orderby('id','desc')->get();
        
        return view('admin.brand.index',['brands' => $brands]);
    }
    public function create()
    {
        return view('admin.brand.create');
    }
    public function store(Request $request)
    {
        app(brandRequest::class);

        $data['name'] = $request->name ;

        //dd($request->name);


         if(($request->image != null))
         { 
            $data['image'] = fileUplode($request->image, brand_image_path());
         }

         
         Brand::create($data);
         return redirect()->route('brand.index');

    }

    public function edit($id)
    {
        $brand = Brand::where('id',$id)->first();
        if($brand)
        {
            return view('admin.brand.edit',['brand' => $brand]);

        }else 
        {
            return redirect()->back();
        }
    }
    public function update(Request $request)
    {
         app(brandRequest::class);
        $data['name'] = $request->name ;

        $brand = Brand::all();

        if($request->image != null)
        {
            
              $data['image'] = fileUplode($request->image, brand_image_path());
        }

        $brand = Brand::where('id',$request->id)->first();


        if($brand->name == $request->name)
        {
            $brand->update($data);
            return redirect()->route('brand.index');
        }else 
        {
            $existsBrand = Brand::where('name',$request->name)->exists();
           if($existsBrand)
            {
                return redirect()->back();

            }else 
            {
                  $brand->update($data);
                  return redirect()->route('brand.index');

            }
        }
        return redirect()->route('brand.index');

       // dd($request->image);




    }
     public function show($id)
    {
         return redirect()->route('home');
    }

    


    public function delete($id)
    {
        $brand = Brand::where('id',$id)->first();  
        $brand->delete();
        return redirect()->back();
    }


  
}
