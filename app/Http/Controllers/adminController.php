<?php

namespace App\Http\Controllers;
use Auth ;
use App\Models\User ;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash ;
use App\Http\Service\MailService ;

class adminController extends Controller
{
    public function admin_index()
    {
        return view('admin.include.index');
    }

    public function adminLogin()
    {
        return view('admin.login.admin_login');
    }
    public function adminLogOut()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function adminLoginCheck(Request $request)
    {

    
        if(Auth::attempt(['email' => $request->email , 'password' => $request->password]))
        {
            if(Auth::user()->role == 1  && Auth::user()->is_user == 1 )
            {
                 return view('admin.include.index');
            }else 
            {
                return redirect()->route('home');
            }
        }
        return redirect()->route('admin.login');
    }
    public function adminSignup()
    {
        return view('admin.login.admin_signup') ;
    }

    public function adminSighupCheck(Request $request)
    {

          $exist =   User::where('email', $request->email)->first();

          if($exist){
               return redirect()->route('admin.login');
           }

        

            $data['name'] = $request->name ;
            $data['email'] =  $request->email; 
            $data['password'] = Hash::make($request->password) ;
            $data['role'] = 1;
            do{
                $data['otp'] = randomNumber(6);
                $userexists = User::where('otp',$data['otp'])->exists();

            }while($userexists);


            $user =  User::create($data) ;
            if($user)
            {
                app(productController::class)->sendmail($user); 

               return redirect()->route('admin.login');
            }
           else 
              return redirect()->back();

    
    }
}
