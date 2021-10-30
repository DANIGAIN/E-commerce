<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category ;
use App\Http\Controllers\FileUploadController;

class categoryController extends Controller
{
    public function index()
    {
        $categorys = Category::orderby('id','desc')->get();
        return view('admin.category.index',['categorys' => $categorys]);
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {

        $data['name'] = $request->name ;

        if($request->image)
        {
            $data['image'] = fileUplode($request->image ,catagory_image_path());

        }
        if($request->icon)
        {
            $data['icon'] = fileUplode($request->icon,catagory_icon_path());

        }

         $data['status']=$request->status=='on' ? true : false;
         $data['top_category']=$request->top_category=='on' ? true : false;
         $data['big_menu']=$request->big_menu=='on' ? true : false;

         
         //dd($data);
         Category::create($data );
         return redirect()->route('categorie.index');


    }

    public function edit($id)
    {
        $categorys = Category::where('id',$id)->first();
        if($categorys)
        {
            return view('admin.category.edit',['categorys'=> $categorys]);
        }else 
        {
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {


        $data['name'] = $request->name ;

        if($request->image)
        {
            $data['image'] = fileUplode($request->image ,brand_image_path());

        }
        if($request->icon)
        {
            $data['icon'] = fileUplode($request->icon,catagory_icon_path());

        }

         $data['status']=$request->status=='on' ? true : false;
         $data['top_category']=$request->top_category=='on' ? true : false;
         $data['big_menu']=$request->big_menu=='on' ? true : false;
         
         $categorys = Category::where('id',$request->id)->first();



        if($categorys->name == $request->name)
        {
            $categorys->update($data);
            return redirect()->route('categorie.index');
        }else 
        {
            $existcategorys = Category::where('name',$request->name)->exists();
           if($existcategorys)
            {
                return redirect()->back();

            }else 
            {
                  $categorys->update($data);
                  return redirect()->route('categorie.index');

            }
        }
        return redirect()->route('categorie.index');





    }

          public function delete($id)
          {
            $category=Category::where(['id'=>$id])->first();
            if($category)
            {

                 $category->delete();
                 return redirect()->back();      
            }
         }

         public function show($id)
         {
            return redirect()->route('home');
         }

}
