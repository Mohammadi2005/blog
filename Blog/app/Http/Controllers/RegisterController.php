<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function checkRegister(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6|max:16',
            'confirm_password' => 'required|min:6|max:16|same:password',
            'email' => 'required|email|unique:users,email',
            'age' => 'required',
        ]);

        $user = User::create([
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
            'email' => $request['email'],
            'age' => $request['age'],
        ]);

//        $posts = Post::all();
        $request->session()->put('user_id', $user->id);
        $posts = Post::with('user:id,username')->get();
        $users = User::get(['username', 'id']);

        return view('posts', compact('posts', 'users'));

    }
}
