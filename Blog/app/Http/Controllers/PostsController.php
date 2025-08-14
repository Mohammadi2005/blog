<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
//        $posts = Post::all();
        $posts = Post::with('user:id,username')->get();
        $users = User::get(['username', 'id']);

        return view('posts', compact('posts', 'users'));
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

        Post::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'status' => $request['status'],
            'user_id' => $user['id'],
        ]);

//        $posts = Post::all();
        $posts = Post::with('user:id,username')->get();
        $users = User::get(['username', 'id']);

        return view('posts', compact('posts', 'users'));
    }

    public function postsUser($id){
        $posts = Post::where('user_id','=', $id)->get();
        $user = User::where('id','=', $id)->get('username');
        return view('posts_user', compact('posts', 'user'));
//        dd($posts, $user);
    }

    public function myPosts($id){
        $posts = Post::where('user_id','=', $id)->get();
        $user = User::where('id','=', $id)->get('username');
        return view('my_posts', compact('posts', 'user'));
        //        dd($posts);
    }

    public function deletePost($post_id){
        $post = Post::findOrFail($post_id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');

    }

    public function editPost($post_id){
        $post = Post::findOrFail($post_id);
        return view('edit_post', compact('post'));
    }

    public function updatePost(Request $request, $post_id){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
        ]);


        $post = Post::findOrFail($post_id);
        $post->update([
            'title' => $request['title'],
            'content' => $request['content'],
            'status' => $request['status'],
        ]);
        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
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

    public function destroy($id)
    {
        //
    }
}
