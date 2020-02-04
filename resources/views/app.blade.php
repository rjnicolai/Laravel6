<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="device-width, user-scalable-no, initial-scale=1.0, maximium-scale=1.0,
        minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    @include('nav')
    @yield('content')
</body>

</html>
