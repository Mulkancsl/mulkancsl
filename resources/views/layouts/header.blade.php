<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
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
                <li class="nav-item {{ Route::currentRouteNamed('source-code') ? 'link-active font-weight-bold' : '' }}">
                    <a class="nav-link" href="{{ route('source-code') }}">Source Code</a>
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