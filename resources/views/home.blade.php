<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/pp.png') }}">
    <title>@yield('title', 'Mulkan | Welcome to my Website')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}">

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <section class="bagian-intro">
        <div class="justify-align-center px-3 pt-4">
            <img src="{{asset('')}}images/pp.png" class="rounded-circle px-2 intro-logo" alt="User Image">
        </div>
        <div class="justify-align-start">
            <p class="intro-judul mb-4">Hi, I'm Mulkan</p>
            <p class="intro-info">Greetings, I am a hard-to-keep quiet person, always curious, like to write and I like learning about technology such as programming and design, besides that I also like doing business. <br> Learn More... <i class="fas fa-angle-double-down"></i></p>
            <a href="{{ route('about') }}" class="btn btn-outline-dark">About Me</a>
            <a href="#" class="btn btn-outline-dark mx-22">Source Code</a>
            <a href="#" class="btn btn-outline-dark">Blog</a>
        </div>
    </section>

    <!-- Scripts -->
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>