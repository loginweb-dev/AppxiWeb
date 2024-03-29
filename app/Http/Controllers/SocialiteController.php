<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

// Models
use App\User;
use App\Customer;

class SocialiteController extends Controller
{
        //function para redirecionar al cuenta social
        public function redirectToProvider($social)
        {
            return Socialite::driver($social)->redirect();
        }
    
        public function handleProviderCallback($social)
        {
            $auth_user = Socialite::driver($social)->user();
            if($auth_user){
               if(!empty($auth_user->email)) {
                   $user = User::where('email', $auth_user->email)->first();
                   if($user) {
                       Auth::login($user, true);
                   }else{
                       $user = new User;
                       $user->name = $auth_user->name;
                       $user->email = $auth_user->email ?? trim(str_ireplace(' ', '.', $auth_user->name)).'.'.rand(1001, 9999).'@loginweb.dev';
                       $user->role_id = 2;
                       $user->password = Hash::make("loginweb_$social");
                       $user->avatar = $auth_user->avatar;
                       $user->save();
   
                       Auth::login($user, true);

                    // Crear Clientes
                    Customer::create([
                        'user_id' => $user->id,
                    ]);
                   }
                   return redirect('/admin');
               }
           } else {
           return 'Ops..!! Hubo Problema el usuario necesita un email.!';
           }
        }
}
