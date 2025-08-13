<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts');
    }

    public function create()
    {
        return view('create_post');
    }

    public function checkCreatePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
        ]);

        $user = $request->session()->get('user');
//        dd($user->id);
//        return view('welcome');
//        dd($request['title'], $request['content'], $request['status'], $request['user_id']);
        Post::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'status' => $request['status'],
            'user_id' => $user['id'],
        ]);

        return redirect('/posts');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
