<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>log in</title>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>


    </style>
</head>
<body class="dark-back">
<section class="container d-grid justify-content-center align-items-center">
    <h1 class="text-center text-light postino">
        PostIno
    </h1>
    <form method="post" enctype="multipart/form-data" class="myform" action="{{route('check-create-post')}}">
        @csrf
        <h3 class="m-5 text-center">create new post</h3>
        <div class="form-group m-3">
            <label for="title" class="lab">title : </label>
            <input type="text" name="title" id="title" class="inp" placeholder="Enter post title">
        </div>
        <div class="form-group m-3">
            <label for="content" class="lab">content : </label>
            <textarea style="height: 10vw; padding-top: 8px" name="content" id="content" class="inp" placeholder="Enter post content"></textarea>
        </div>
        <div class="form-group m-3">
            <p>Do you want the post to be published?</p>
            <input type="radio" name="status" value="0">
            <label for="status" class="leb">No</label><br>
            <input type="radio" name="status" value="1">
            <label for="status" class="leb">Yes</label><br>
        </div>
        <div class="form-group m-3 mt-5">
            <input type="submit" value="create post" class="inp btnform">
        </div>
    </form>
</section>
</body>
</html>
