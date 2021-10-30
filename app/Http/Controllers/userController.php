<?php

namespace App\Http\Controllers;
use App\Models\User ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash ;
use Auth ;
use App\Http\Service\MailService;
use App\Http\Controllers\productController;


class userController extends Controller
{
   

    public function login()
    {
        return view('front.user.login');
    }
    public function userlogout()
    {

        Auth::logout();
        return redirect()->route('home');
    }
   
    public function loginCheck(Request $request)
    {
        if(Auth::attempt(['email' => $request->email , 'password' => $request->password]))
        {
            if(Auth::user()->role == 2 && (Auth::user()->is_user == 1))
            {
                return redirect()->route('home');
            }
            
        }
        return redirect()->route('user.login');
    }
    public function signup()
    {
        return view('front.user.signup');
    }

    public function userSighupCheck(Request $request)
    {
       $exist =   User::where('email', $request->email)->first();

      if($exist){
         return redirect()->route('user.login');
       }


      
       /* $user = User::create([
            'role' => 2,
            'name' => $request->name ,
            'email' => $request->email ,
            'password' => Hash::make($request->password),
        ]);*/


        $data['role'] = 2 ;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        do{
            $data['otp'] = randomNumber(6);
            $userexists = User::where('otp',$data['otp'])->exists(); 

        }while ($userexists);

        $user =  User::create($data);
      
        if($user)
        {
          app(productController::class)->sendmail($user);  
          
           return redirect()->route('user.login');

        } else 
        {
            return redirect()->back();
        }
        return redirect()->route('user.login');
    }
}
