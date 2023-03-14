<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where(['email' =>$request->email])->first();

        if(!$user || !Hash::check($request->password, $user->password))
        {
            return "Username or Password Not Matched";
        }

        else {

            $request->session()->put('user',$user);
            return redirect('/');
        }
    }

    public function register(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password) ;
        $user->save();
        return redirect('/login');
    }
}
