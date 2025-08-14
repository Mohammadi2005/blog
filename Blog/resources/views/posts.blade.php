@extends('layouts.app')

    @section('title')
        Login
    @endsection

    @section('main')

        <section class="container">
            <div class="row justify-content-center align-items-start">
            <h1 class="text-center text-light postino col-12 mt-4">
                PostIno
            </h1>

{{--            <div class=" justify-content-center align-items-center">--}}
                <div class="col-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <a class="btn btn-light col-5 my-2 px-1" href="create_post">create post</a>
                        <a class="btn btn-light col-5 my-2 px-1" href="create_post">create post</a>
                    </div>
                    <div class="">
                        <div class="p-3 myform">
                            @foreach($users as $user)
                                <a class="btn d-block text-start" href="posts_user/{{$user->id}}">{{$user->username}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-8 ">
                        @foreach($posts as $post)
                            <div class="myform m-2 ">
                                <div class="card-body p-4">
                                    <h4 class="card-title">{{$post['title']}}</h4>
                                    <p class="card-text lead">{{$post['content']}}</p>
                                    <p class="mb-0 d-inline">author : {{$post->user->username}}</p>
                                    <p class="mb-0 d-inline mx-4">views : {{$post['views']}}</p>
                                    @if($post->created_at == $post->updated_at)
                                        <p class="mb-0">created at : {{$post->created_at}}</p>
                                    @else
                                        <p class="mb-0">updated at : {{$post->updated_at}}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                </div>
{{--            </div>--}}
            </div>
        </section>
@endsection
