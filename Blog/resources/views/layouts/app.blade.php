<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/bootstrap.js') }}"></script>

{{--    <script src="js/bootstrap.js"></script>--}}
{{--    <link rel="stylesheet" href="css/bootstrap.css">--}}
</head>
<body class="">
    @yield('main')
</body>
</html>
