<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('img/title.jpeg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    {{-- <link rel="stylesheet" href="css/common.css"> --}}

    {{-- LOAD SCRIPTS --}}
    <script src="{{asset('js/nav.js')}}" defer></script>
</head>
<body>
    {{-- {{flasher_render()}} --}}

    <header class="header">
        <div class="brand">
            <h1 class="brand__title">
                <a href="/" class="brand__title--link">EasyCoach Ke</a>
            </h1>
        </div>

        <nav class="navbar">
            <ul class="nav__list">
                <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="/about-us" class="nav__link">About Us</a></li>
                <li class="nav__item"><a href="/routes" class="nav__link">Routes</a></li>
                <li class="nav__item"><a href="/services" class="nav__link">Services</a></li>
                <li class="nav__item"><a href="/booking" class="nav__link nav__link--btn">Book Online</a></li>
            </ul>
        </nav>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </header>

    <main class="main animate-opacity">
        {{$slot}}
    </main>

    <footer class="footer">
        <p>Copyright &copy; {{date('Y')}}, All Rights Reserved.</p>
        <a href="/admin/login" class="footer__link">Admin Login</a>
    </footer>
</body>
</html>