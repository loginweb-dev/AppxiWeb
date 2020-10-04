<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    function user_get($email, $password){
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // The user is being remembered...
            $user = \App\User::where('email', $email)->first();
            $customer = \App\Customer::where('user_id', $user->id)->first();
            // return $user;
            return response()->json([
                'user' => $user, 
                'customer' => $customer
                ]);
        }else{
            return  response()->json(['Error' => 'Error en los credenciales']);
        }
    }
     
    function custumer_location_get($customer_id)
    {
        $locations = \App\CustomerLocation::where('customer_id', $customer_id)->get();
        if($locations)
        {
            return response()->json(['locations' => $locations]);
        }else{
            return  response()->json(['Error' => 'No Existen Locaciones']);
        }
    }
}
