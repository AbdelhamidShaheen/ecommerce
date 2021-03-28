<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
//get SignUp
    public function SignUp()
    {
        return view("users.SignUp");

    }
//post SignUp

    public function PostSignUp(Request $request)
    {
        $validator=$request->validate(
            [
                "username"=>["unique:users,user_name"],
                "email"=>["email:rfc","unique:users,email"],
                "password"=>["min:8","max:16"],
                "conpassword"=>["same:password"],
            ]
        );
      
    $user=new user();
    $user->user_name=$request->username;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $user->save();

     return redirect()->route('signin');

    }
//get SignIn
    public function SignIn()
    {
        return view("users.SignIn");

    }
//post SignIn

    public function PostSignIn(Request $request)
    {


    }
    //
}
