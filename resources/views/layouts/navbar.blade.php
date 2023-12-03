<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <diV class="container">
            <div class="nav-left">

                <a href="/" class="d-flex align-items-center gap-2" style="text-decoration: none; color:black;">
                    <img src="{{ asset('gejugan-icon.png') }}" alt="Gejugan Icon" class="logo-icon"
                        width="30" height="40">
                    <div class="d-flex flex-column">
                        <p style="margin-bottom: -0.375rem; color: rgb(43, 119, 252);">SISTEM INFORMASI</p>
                        <h6 class="mb-0">DESA GEJUGAN</h6>
                    </div>
                </a>
            </div>
            @if (Request::is('login'))
                <a class="nav-right" href="{{ url('/') }}">HOME</a>
            @elseif(Request::is('home'))
                <a class="nav-right" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    LOGOUT
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <a class="nav-right" href="{{ url('/login') }}">
                    <h3>LOGIN</h3>
                </a>
            @endif
        </div>
    </nav>
