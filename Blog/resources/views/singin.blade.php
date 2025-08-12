<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sing in</title>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background-color: rgba(0, 0, 0, 0.8);">
<section class="container">
    <div class="d-grid justify-content-center align-items-center">
        <h1 class="text-center text-light postino px-5 ">
            PostIno
        </h1>
        <form method="post" class="myform mt-5 " action="login.html">
            <h3 class="m-5">sing in</h3>
            <div class="form-group m-3">
                <label for="username" class="lab">username : </label>
                <input type="text" name="username" id="username" class="inp" placeholder="Enter your username">
            </div>
            <div class="form-group m-3">
                <label for="email" class="lab">email : </label>
                <input type="text" name="email" id="email" class="inp" placeholder="Enter your email">
            </div>
            <div class="form-group m-3">
                <label for="age" class="lab">age : </label>
                <input type="text" name="age" id="age" class="inp" placeholder="Enter your username">
            </div>
            <div class="form-group m-3">
                <label for="password" class="lab">password : </label>
                <input type="password" name="password" id="password" class="inp" placeholder="Enter your password">
            </div>
            <div class="form-group m-3 mt-5">
                <input type="submit" value="login" class="inp btnform">
            </div>
        </form>
    </div>
</section>
</body>
</html>
