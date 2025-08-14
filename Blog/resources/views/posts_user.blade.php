@extends('layouts.app')

@section('title')
    {{$user[0]->username}} posts
@endsection

@section('main')
    <section class="container">
        <div class="row justify-content-center align-items-start">
            <h1 class="text-center text-light postino col-12 mt-4">
                you see {{$user[0]->username}} posts
            </h1>

            <div class="col-8 ">
                <h2 class="text-center text-light postino col-12 mt-4">
                </h2>
                @foreach($posts as $post)
                    <div class="m-2 card">
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
        </div>
    </section>
@endsection
