<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\sliderRequest ;
use App\Http\Controllers\FileUploadController;
use App\Models\Slider ;

class sliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::orderby('id','desc')->get();
        return view('admin.slider.index',['sliders'=> $sliders ]);
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        app(sliderRequest::class);
        
        if($request->background_image)
        {

            $data['background_image'] = fileUplode($request->background_image,slider_image_path());

        }
        if($request->banner)
        {
            $data['banner'] = fileUplode($request->banner,slider_image_path());
        }
        $data['hadding1'] = $request->hadding1 ;
        $data['hadding2'] = $request->hadding2 ;
        $data['title'] = $request->title ;
        $data['status'] = $request->status == 'on'? true :false ;


        Slider::create($data);

        return redirect()->route('slider.index');

    }

    public function delete($id)
    {
        $slider = Slider::where('id',$id)->first();
        if($slider)
        {
            $slider->delete();

        }
        return redirect()->route('slider.index');
    }
    
    public function show($id)
    {
        return redirect()->route('home');
    }
}
