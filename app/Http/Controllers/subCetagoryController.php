<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ Subcetagory;
use App\Models\Category;

class subCetagoryController extends Controller
{
    public function index()
    {
        $subcetagorys = Subcetagory::orderby('id','desc')->get();
    
        return view('admin.subCetagory.index',['subcetagorys' => $subcetagorys]);
    }
    public function create()
    {
        $cetagorys = Category::get();
        return view('admin.subCetagory.create',['cetagorys'=> $cetagorys]);
    }
    public function store(Request $request)
    {
        $data['category_id'] = $request->category_id;
        $data['name'] = $request->name ;
        $data['status'] = $request->status == 'on' ? true: false ;

        Subcetagory::create($data);
        return redirect()->route('subCetagory.index');
    }
    public function delete(Request $request)
    {
        $subcetagory = Subcetagory::first();
        if($subcetagory)
        {
            $subcetagory->delete();
            return redirect()->route('subCetagory.index');
        }
        return redirect()->back();
    }


  }
