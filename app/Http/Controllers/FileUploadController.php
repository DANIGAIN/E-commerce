<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{


      public function fileUplode($image ,$path = null)
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

    
}
