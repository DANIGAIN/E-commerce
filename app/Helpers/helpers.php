<?php 


use App\Models\Cart ;
use App\Models\Product ;


    function fileUplode($image ,$path = null)
      {
          $image_path = $path ? $path : 'images';

          if(!file_exists(public_path($image_path)))
          {
            mkdir(public_path($image_path),0777 ,true);
          }

          $name = $image->getClientOriginalName();
          $destination = public_path($image_path);

          $imageName = time().'_'.$name ;

          $image->move($destination,$imageName);

          return $image_path.'/'.$imageName;


    }

    function brand_image_path()
    {
      return 'images/brand/';
    }
    function catagory_image_path()
    {
      return 'images/catagory/image/';
    }
    function catagory_icon_path()
    {
      return 'images/catagory/icon/';
    }

    function slider_image_path()
    {
      return 'images/slider/';
    }
    function trendy_image_path()
    {
      return 'images/trendy/';
    }

    function product_image_path()
    {
      return 'images/product/';
    }
    function banner_image_path()
    {
      return 'images/banner';
    }
    function blog_image_path()
    {
      return 'images/blog';
    }
    function CartCount()
    {
         return Cart::where('user_id' , Auth::id())->count();

    }
    function CartAmount()
    {
       $items = Cart::where('user_id' , Auth::id())->get();
       $amount = 0 ;


       if(isset($items))
       {

            foreach($items as $item)
            {
               if($item->product)
              {
                  $amount += ($item->product->quantity-(($item->product->quantity*$item->product->discount)/100))* $item->quantity ;
              }

            }

       }

       return $amount ;
    }
  function totaltax($totalprice ,$tax)
  {
    return ((float)$totalprice * (float)$tax)/100;
  }

  function totalcost($totalAmount, $tax ,$shippingCost)
  {
      $cost =  ((float)$totalAmount + (float)$tax + (float)$shippingCost); 
      return $cost ;
      
  }
  function total($totalprice)
  {

   $items = Cart::where('user_id' , Auth::id())->first();
    $product = Product::where('id',$items->product_id)->first();

    $discount = $product->discount ;

    return ($totalprice - (((float)$totalprice *(float)$discount)/100));
  }

  function product_cost($totalprice,$discount)
  {
     return ($totalprice - (((float)$totalprice *(float)$discount)/100));
  }


//**********************************************************************************************************************//
  
    
function randomMixString($a = 10)
{
    $x = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $c = strlen($x) - 1;
    $z = '';
    for ($i = 0; $i < $a; $i++) {
        $y = rand(0, $c);
        $z .= substr($x, $y, 1);
    }
    return $z;
}

//************************random number ****************

function randomNumber($a = 10)
{
    $x = '0123456789';
    $c = strlen($x) - 1;
    $z = '';
    for ($i = 0; $i < $a; $i++) {
        $y = rand(0, $c);
        $z .= substr($x, $y, 1);
    }
    return $z;
}


function randomString($a = 10)
{
    $x = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $c = strlen($x) - 1;
    $z = '';
    for ($i = 0; $i < $a - 2; $i++) {
        $y = rand(0, $c);
        $z .= substr($x, $y, 1);
    }
    return 'FS' . $z;
}


?>