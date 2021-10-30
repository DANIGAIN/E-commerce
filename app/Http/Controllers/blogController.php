<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\blogRequest;

use App\Models\Blog; 

class blogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderby('id','desc')->get();
        return view('admin.blog.index',['blogs' => $blogs]);
    }
    public function create()
    {
        return view('admin.blog.create');
    }
    public function store(Request $request)
    {
        app(blogRequest::class);

        if($request->image)
        {
            $data['image'] = fileUplode($request->image,blog_image_path());

        }
        if($request->author)
        {
            $data['author'] = $request->author;
        }

        $data['hadding'] = $request->hadding;
        $data['comment'] = $request->comment;
        $data['discription'] = $request->discription;
        $data['status'] = ($request->status =='on')? true : false;

        Blog::create($data);

        return redirect()->route('blog.index');

    }

    public function edit($id)
    {
        $blog = Blog::where('id',$id)->first();
        if($blog)
        {
            return view('admin.blog.edit',['blog'=> $blog]);
        }else 
        {
            return redirect()->back();
        }
    }
    public function update(Request $request)
    {
        app(blogRequest::class);

        if($request->image)
        {
            $data['image'] = fileUplode($request->image,blog_image_path());

        }
        if($request->author)
        {
            $data['author'] = $request->author;
        }

        $data['hadding'] = $request->hadding;
        $data['comment'] = $request->comment;
        $data['discription'] = $request->discription;
        $data['status'] = ($request->status =='on')? true : false;

        $blog = Blog::where('id',$request->id)->first();
        
        $blog->update($data);
        return redirect()->route('blog.index');
        
    }
    public function delete($id)
    {
        $blog = Blog::where('id',$id)->first();
        if($blog)
        {
            $blog->delete();
        }
        return redirect()->route('blog.index');

    }
    public function show($id)
    {
      
       return redirect()->route('home');

    }

}
