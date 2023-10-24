<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = "user";

        $user->save();

        return back()->with('succes','Register Succesfully');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $validate = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        

        if(Auth::attempt($validate)){
            return redirect('/user/index')->with('succes','Login Berhasil');
        }

        return back()->with('error','Email Or Password Wrong');

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
