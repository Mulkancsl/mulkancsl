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
    <link href="{{ asset('bootstrap/css/particles.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top navbar-particles mb-5 md-show">
        <div class="container">
            <a class="navbar-brand d-flex align-item-center" href="{{ asset('') }}"><img src="{{asset('')}}images/pp.png" class="rounded-circle px-2" alt="User Image" width="50px"><b>Mulkan</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Route::currentRouteNamed('about') ? 'link-active font-weight-bold' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">About Me</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteNamed('portfolio') ? 'link-active font-weight-bold' : '' }}">
                        <a class="nav-link" href="{{ route('portfolio') }}">Work</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteNamed('blog') ? 'link-active font-weight-bold' : '' }}">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    @guest
                    @if (Route::has('register'))
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


    <nav class="navbar-expand-lg navbar-light bg-white mb-5 sm-show fixed-top mb-5">
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="p-2 bd-highlight d-flex justify-content-center">
                <a class="navbar-brand d-flex justify-content-center align-item-center" href="{{ asset('') }}"><img src="{{asset('')}}images/pp.png" class="rounded-circle px-2" alt="User Image" width="50px"><b>Mulkan</b></a>
            </div>
            <div class="p-2 bd-highlight d-flex justify-content-around">
                <a class="nav-link text-dark d-inline-flex {{ Route::currentRouteNamed('about') ? 'link-active font-weight-bold' : '' }}" href="{{ route('about') }}">About</a>
                <a class="nav-link text-dark d-inline-flex {{ Route::currentRouteNamed('portfolio') ? 'link-active font-weight-bold' : '' }}" href="{{ route('portfolio') }}">Work</a>
                <a class="nav-link text-dark d-inline-flex {{ Route::currentRouteNamed('blog') ? 'link-active font-weight-bold' : '' }}" href="{{ route('blog') }}">Blog</a>
            </div>
        </div>
    </nav>

    <div id="particles-js"></div>

    <section class="bagian-landing content-particles d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column">
            <div class="d-flex flex-column pt-5">
                <p class="d-flex flex-column justify-content-center align-items-center intro-judul mb-4 text-start md-show">Hello, <br> I am <br> Mulkan</p>
            </div>
            <div class="d-flex flex-column pt-5">
                <p class="d-flex justify-content-center align-items-end"> &copy; 2020 Mulkan</p>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- stats.js lib -->
    <!-- <script src="http://threejs.org/examples/js/libs/stats.min.js"></script> -->

    <script src="{{asset('bootstrap/js/particles.js')}}"></script>
</body>

</html>