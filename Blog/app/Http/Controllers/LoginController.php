<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function checkLogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6|max:16',
        ]);



        $user = User::where('username' , '=', $request['username'])->first();


        if($user && Hash::check($request['password'], $user->password)){
            $request->session()->put('user_id', $user->id);
            return redirect('/posts');
        } else {
            return back()->withErrors([
                'error' => 'Wrong username or password'
            ])->withInput();
        }
    }
}
