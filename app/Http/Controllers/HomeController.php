<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth ;
use  App\Models\Brand ;
use App\Models\Discount; 
use App\Models\Slider ;
use App\Models\Category ;
use App\Models\Trendy_fashion ;
use App\Models\Product ;
use App\Models\Banner ;
use App\Models\Cart ;
use App\Models\Blog ; 
class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::get();
        $discounts = Discount::first();
        $sliders = Slider::where('status',true)->get();
        $info['category'] = Category::where('status', true)->with('subcetagory')->get();
        $info['top_category'] =Category::where(['top_category' => true ])->get();
        $info['big_menu'] =  Category::where(['big_menu' => true])->get();
        $trendys = Trendy_fashion::where('status',true)->get();
        $banner = Banner::first();
        $blogs = Blog::where('status',true)->get();
        
        //product -->

        $info['featured_product'] = Product::where(['featured_product' => true , 'status' => true])->get();
        $info['new_product'] = Product::where(['new_product' => true ,'status' => true])->get();
        $info['best_selling'] = Product::where(['best_selling' => true ,'status' => true])->get();
        $info['new_arrival'] = Product::where(['new_arrival' => true ,'status' => true])->get();

       return view('front.include.main',[ 'info' => $info, 'brands' => $brands , 'discounts'=> $discounts ,'sliders' => $sliders , 'trendys' => $trendys ,'banner' => $banner ,'blogs' => $blogs ,'page' => 'home' ]);

       

    }
   
}
