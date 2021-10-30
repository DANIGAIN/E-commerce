<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\bannerRequest;
use App\Models\Banner;

class bannerController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        return view('admin.banner.index',['banner' => $banner]);
    }
    public function create()
    {
        return view('admin.banner.create');
    }
    public function store(Request $request)
    {
        app(bannerRequest::class);
        
        $data['background_image']= fileUplode($request->background_image,banner_image_path());
        $data['image'] = fileUplode($request->image, banner_image_path());
        $data['hadding'] = $request->hadding ;
        $data['title'] = $request->title ;


        Banner::create($data);

        return redirect()->route('banner.index');
    }
    public function delete($id)
    {
        $banner = Banner::first();
        if($banner)
        {
            $banner->delete();
        }
        return redirect()->back();
    }


}
