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
                        <div class="card-body p-4 pb-3">
                            <h4 class="card-title">{{$post['title']}}</h4>
                            <p class="card-text lead">{{$post['content']}}</p>
                            <p class="mb-0 d-inline">author : {{$post->user->username}}</p>
                            <p class="mb-0 d-inline mx-4">views : {{$post['views']}}</p>
                            @if($post->created_at == $post->updated_at)
                                <p class="mb-0">created at : {{$post->created_at}}</p>
                            @else
                                <p class="mb-0">updated at : {{$post->updated_at}}</p>
                            @endif
{{--                            <a class="btn btn-danger mt-3 card-link" href="{{ url('delete_post/'.$post->id) }}">Delete</a>--}}
{{--                            <a href="{{ route('delete_post', $post->id) }}"--}}
{{--                               class="btn btn-danger mt-3 card-link"--}}
{{--                               onclick="return confirm('آیا از حذف این پست مطمئن هستید؟')">--}}
{{--                                Delete--}}
{{--                            </a>--}}
                            <button type="button" class="btn btn-danger mt-3"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $post->id }}">
                                Delete
                            </button>
                            <div class="modal fade" id="deleteModal{{$post->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirm deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            do you want delete this post ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cansel</button>
                                        <form method="post" action="{{route('delete_post', $post->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="btn btn-dark  mt-3 card-link">Edit</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
