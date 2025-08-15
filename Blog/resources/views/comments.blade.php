@extends('layouts.app')

@section('title')
    comments
@endsection

@section('main')
    <section class="container">
        <div class="row justify-content-center align-items-start">
            <div class="col-8 mb-5">
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
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="display-6 ms-3">comments : </h3>
{{--                    <a class="btn btn-primary text-center me-3">create comment</a>--}}
                    <a class="btn btn-primary text-center me-3" onclick="toggleCommentForm()">
                        create comment
                    </a>

                </div>
                @foreach($comments as $comment)
                    <div class="m-2 card">
                        <div class="card-body p-4">
                            <p class="card-text lead">{{$comment['content']}}</p>
                            <p class="mb-0 d-inline">author : {{$comment->user->username}}</p>
                            @if($comment->created_at == $comment->updated_at)
                                <p class="mb-0">created at : {{$comment->created_at}}</p>
                            @else
                                <p class="mb-0">updated at : {{$comment->updated_at}}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
                <div id="comment-form-wrapper" class="comment-form-wrapper">
                    <form class="comment-box col-8" method="post" enctype="multipart/form-data"
                          action="{{ route('send_comment', $post->id) }}">
                        @csrf
                        <textarea placeholder="write your comment ... " name="content" id="content" oninput="autoResize(this)"></textarea>
                        <input type="submit" class="btn btn-primary" value="send">
                    </form>
                </div>
            </div>

        </div>
    </section>
    <script>
        function autoResize(el) {
            el.style.height = 'auto';
            el.style.height = (el.scrollHeight) + 'px';
        }

        function toggleCommentForm() {
            let formWrapper = document.getElementById('comment-form-wrapper');
            formWrapper.classList.toggle('show');
        }

    </script>
@endsection
