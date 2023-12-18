<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    
</head>
<body>
    @include('layouts.header')
    <section style='min-height:100vh;'>
        @yield('content')
    </section>
    @include('layouts.footer')
    
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>