<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    @include('site.layout._partials.nav')
    @yield('content')
</body>
</html>
