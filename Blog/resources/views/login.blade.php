@extends('layouts.app')

@section('title')
    Login
@endsection

@section('main')
    <section class="container d-grid justify-content-center align-items-center">
    <h1 class="text-center text-light postino">
        PostIno
    </h1>
    <form method="post" enctype="multipart/form-data" class="myform" action="{{route('check-login')}}">
        @csrf
        <h3 class="m-5 text-center">Log in to your account</h3>
        <div class="form-group m-3">
            <label for="username" class="lab">username : </label>
            <input type="text" name="username" id="username" class="inp" placeholder="Enter your username">
        </div>
        <div class="form-group m-3">
            <label for="password" class="lab">password : </label>
            <input type="password" name="password" id="password" class="inp" placeholder="Enter your password">
        </div>
        <div class="form-group m-3 mt-5">
            <input type="submit" value="log in" class="inp btnform">
        </div>
    </form>
</section>
@endsection
