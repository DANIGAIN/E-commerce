<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcetagory;
use App\Http\Requests\ProductRequest;
use Auth;
use App\Models\User;
use App\Http\Service\MailService;


class productController extends Controller
{
    public function index()
    {
        $products  = Product::orderby('id','desc')->get();
        
        return view('admin.product.index',['products' => $products]);
    }
    public function create()
    {
        $categorys = Category::where('status',true)->get(); 
        
        return view('admin.product.create',['categorys' => $categorys]);

    }
    public function store(Request $request)
    {
        app(ProductRequest::class);
    
        $data['category_id'] = $request->catagory_id;

        $data['sub_category_id'] = $request->sub_catagory_id ;
        

        if($request->name)
        {
            $data['name'] = $request->name ;
        }
        if($request->discription)
        {
            $data['discription'] = $request->discription;

        }
        if($request->details)
        {
            $data['details'] = $request->details;
        }


        $data['quantity'] = $request->quantity;
        $data['discount'] = $request->discount;


        if($request->image1)
        {
            $data['image1'] = fileUplode($request->image1,product_image_path());
        }
        if($request->image2)
        {
            $data['image2'] = fileUplode($request->image2,product_image_path());
        }
        if($request->image3)
        {
            $data['image3'] = fileUplode($request->image3,product_image_path());
        }
        if($request->image4)
        {
            $data['image4'] = fileUplode($request->image4,product_image_path());
        }


        $data['featured_product'] = $request->featured_product == 'on' ? true: false ;
        $data['new_product'] = $request->new_product == 'on' ? true: false ;
        $data['best_selling'] = $request->best_selling == 'on' ? true: false ;
        $data['new_arrival'] = $request->new_arrival == 'on' ? true: false ;  
        $data['status'] = $request->status == 'on' ? true: false ;




    
         
        Product::create($data);
       return redirect()->route('product.index');

    }


   public function show($id)
   {
       return redirect()->route('home');
   }

      public function edit($id)
    {
         $categorys = Category::where('status',true)->get(); 
        $product= Product::where('id',$id)->first();
        if($product)
        {
            return view('admin.product.edit',['product' => $product , 'categorys' => $categorys ]);

        }else 
        {
            return redirect()->back();
        }
    }
    public function update(Request $request)
    {
        app(ProductRequest::class);
    
        $data['category_id'] = $request->catagory_id;

        $data['sub_category_id'] = $request->sub_catagory_id ;
        

        if($request->name)
        {
            $data['name'] = $request->name ;
        }
        if($request->discription)
        {
            $data['discription'] = $request->discription;

        }
        if($request->details)
        {
            $data['details'] = $request->details;
        }


        $data['quantity'] = $request->quantity;
        $data['discount'] = $request->discount;


        if($request->image1)
        {
            $data['image1'] = fileUplode($request->image1,product_image_path());
        }
        if($request->image2)
        {
            $data['image2'] = fileUplode($request->image2,product_image_path());
        }
        if($request->image3)
        {
            $data['image3'] = fileUplode($request->image3,product_image_path());
        }
        if($request->image4)
        {
            $data['image4'] = fileUplode($request->image4,product_image_path());
        }


        $data['featured_product'] = $request->featured_product == 'on' ? true: false ;
        $data['new_product'] = $request->new_product == 'on' ? true: false ;
        $data['best_selling'] = $request->best_selling == 'on' ? true: false ;
        $data['new_arrival'] = $request->new_arrival == 'on' ? true: false ;  
        $data['status'] = $request->status == 'on' ? true: false ;


        $products = Product::where('id',$request->id)->first();

        if($products)
        {
            $products->update($data);
        }


        return redirect()->route('product.index');
    
    }
  


   public function delete($id)
   {
        $products = Product::where('id',$id)->first();
        if($products)
        {
            $products->delete();
        }
        return redirect()->route('product.index');
   }


   public function subCetagory(Request $request)
    {

        $subcetagory = Subcetagory::where('category_id',$request->catagory_id)->get();

        return  json_encode($subcetagory);
    }






    //****************************************************************************************************************//
    //product details---> >
   public function details($id)
   {
 
       $product = Product::where('id',$id)->first();

       return view('front.product.details' ,['product' => $product]);
   }




   //***************************************************************************************************************//
   public function sendmail($user = null)
   {
           $mailService = app(MailService::class);

           $userName = $user->name;
           $userEmail = $user->email;
           $mailTemplate = 'mail_tamplate';

           $companyName = "Appstick";
           $subject = __('verify email | :companyName', ['companyName' => $companyName]);

           $data['data'] = $user;
           $data['otp'] = $user->otp;

          $mailService->send($mailTemplate, $data, $userEmail, $userName, $subject);
   } 

   public function mail(Request $request)
   {
      $user = User::where('otp',$request->otp)->exists();

      if($user)
      {
          $data['is_user'] = true ;

          $user = User::where('otp',$request->otp)->first();

          $user->update($data);
          return "User is created successfully";
      }

   }
 
}
?>