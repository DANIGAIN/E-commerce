<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Trendy_fashion;

class trendyFashinsController extends Controller
{
     public function index()
     {
        $trendys = Trendy_fashion::where('status', true )->orderby('id','desc')->get();
        return view('admin.trendy.index',['trendys'=> $trendys]);
     }
     public function create()
     {
        return view('admin.trendy.create');

     }
     public function store(Request $request)
     {
         if($request->trendy_fashion_image)
         {
            $data['trendy_fashion_image'] = fileUplode($request->trendy_fashion_image,trendy_image_path());
         }
         $data['trendy_fashion_offer'] = $request->trendy_fashion_offer;

         $data['status'] = $request->status == 'on'? true: false;

         Trendy_fashion::create($data);

         return redirect()->route('trendy.index');

     }
     public function delete($id)
     {
          $trendys = Trendy_fashion::where('id',$id)->first();
          if($trendys)
          {
              $trendys->delete();
          }
          return redirect()->route('trendy.index');
      }

      public function show($id)
      {
         return redirect()->route('home');
      }
      public function edit($id)
      {
         $trendys = Trendy_fashion::where('id' ,$id)->first();
         if($trendys)
         {
            return view('admin.trendy.edit',['trendys'=> $trendys]);
         }else 
         {
            return redirect()->back();
         }
      }
      public function update(Request $request)
      {

         if($request->trendy_fashion_image)
         {
            $data['trendy_fashion_image'] = fileUplode($request->trendy_fashion_image,trendy_image_path());
         }
         $data['trendy_fashion_offer'] = $request->trendy_fashion_offer;

         $data['status'] = $request->status == 'on'? true: false;

         $trendys = Trendy_fashion::where('id',$request->id)->first();

         $trendys->update($data);

         return redirect()->route('trendy.index');

      }




}
