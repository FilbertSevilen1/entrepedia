<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/home.css">
    <link rel="stylesheet" href="/storage/css/card.css">
    @yield('css')
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/storage/image/websiteicon/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Entrepedia
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (Auth::check() && Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('product') }}">Manage Article</a>
                </li>
                @endif
            </ul>
            @if (Auth::check())
            <ul class="navbar-nav mx-3">
                @if (Auth::user()->role == 'user')
                <li class="nav-item">
                    {{-- <form action="{{ url('/cart') }}" method="POST">
                        <button class="nav-link" type="submit"><i class="bi bi-cart2"></i></button>
                    </form> --}}
                    <a class="nav-link" href="{{ url('/cart') }}" class="dropdown-item"><i class="bi bi-cart2"></i></a>
                </li>
                @endif
                <li class="nav-item dropdown dropstart">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->username }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/profile') }}" class="dropdown-item">Profile</a></li>
                        @if (Auth::user()->role == 'user')
                        <li><a href="{{ url('/history') }}" class="dropdown-item">Order History</a></li>
                        @endif
                        <li>
                            <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @else
            <ul class="navbar-nav mx-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>
            </ul>
            @endif
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 40px">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @yield('js')
  </body>
</html>
