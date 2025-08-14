<section class="container">
    <div class="row justify-content-center align-items-center">
        <h1 class="text-center text-light postino col-12 mt-4">
            PostIno
        </h1>
        <form method="POST" enctype="multipart/form-data" class="myform col-5 my-5" action="{{$action}}">
            @csrf
            @method($method)
            <h3 class="m-5 text-center">{{$message}}</h3>
            <div class="form-group m-3">
                <label for="title" class="lab">title : </label>
                <input type="text" name="title" id="title" class="inp" placeholder="Enter post title"
                value="{{ old('title', $post->title ?? '') }}">
            </div>
            <div class="form-group m-3">
                <label for="content" class="lab">content : </label>
                <textarea style="height: 10vw; padding-top: 8px" name="content" id="content" class="inp" placeholder="Enter post content">{{ old('content', $post->content ?? '') }}</textarea>
            </div>
            <div class="form-group m-3">
                <p>Do you want the post to be published?</p>
                <input type="radio" name="status" value="0">
                <label for="status" class="leb">No</label><br>
                <input type="radio" name="status" value="1">
                <label for="status" class="leb">Yes</label><br>
            </div>
            <div class="form-group m-3 mt-5">
                <input type="submit" value="{{$textBtn}}" class="inp btnform">
            </div>
        </form>
    </div>
</section>
