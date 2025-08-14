@extends('layouts.app')

@section('title')
    Create Post
@endsection

@section('main')
    @include('posts.form', [
    'action' => route('check-create-post'),
    'method' => 'post',
    'message' => 'create new post',
    'textBtn' => 'create post'
])
@endsection
