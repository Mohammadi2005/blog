@extends('layouts.app')

@section('title')
    edit Post
@endsection

@section('main')
    @include('posts.form', [
    'action' => route('update_post', $post->id),
    'method' => 'PUT',
    'message' => 'Edit post',
    'post' => $post,
    'textBtn' => 'edit post',
])
@endsection

