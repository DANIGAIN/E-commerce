<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data['name'] = 'dani';
        $data['email'] = 'danigain1234@gmail.com';
        $data['password'] = Hash::make('12345');
        $data['role'] = 1;
        $data['is_user'] = true ;
        do{
                $data['otp'] = randomNumber(6);
                $userexists = User::where('otp',$data['otp'])->exists();

         }while($userexists);

        user::create($data);




        $data['name'] = 'admin';
        $data['email'] = 'admin@gmail.com';
        $data['password'] = Hash::make('12345');
        $data['role'] = 1 ;
        $data['is_user'] = true ;
        do{
                $data['otp'] = randomNumber(6);
                $userexists = User::where('otp',$data['otp'])->exists();

         }while($userexists);

        user::create($data);
    }
}
