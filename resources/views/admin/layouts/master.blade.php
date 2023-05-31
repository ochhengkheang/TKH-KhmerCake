<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin/master.css') }}">
    <script src="https://kit.fontawesome.com/be05b4c600.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="top">
        <h1>@yield('location')</h1>
    </div>

    {{-- Unrefined version --}}

    {{-- <div class="container">
        <div class="container-left">
            <div class="container-left-top">
                <div class="container-left-top-line"></div>
                <a href="/admin/dashboard"><i class="fa-solid fa-gauge" style="color: #ffffff;"></i>Dashboard</a>
                <a href="/admin"><i class="fa-solid fa-house-user" style="color: #ffffff;"></i>Home</a>
                <a href="/admin/products"><i class="fa-solid fa-bag-shopping" style="color: #ffffff;"></i></i>Products</a>
                <a href=""><i class="fa-solid fa-user" style="color: #ffffff;"></i>Customer</a>
            </div>
            <div class="container-left-bottom">
                <a href="">
                    <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                    <div>@yield('user')</div>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
                <div class="container-left-bottom-dropdown">
                    <ul>
                        <li><a href="">Profile</a></li>
                        <li><a href="">Setting</a></li>
                        <li><a href="">Signout</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}

        {{-- Unrefined version --}}

        <nav>
            <ul>
                <div></div>
                <li><a href="/admin/dashboard"><i class="fa-solid fa-gauge" style="color: #ffffff;"></i>Dashboard</a></li>
                <li><a href="/admin"><i class="fa-solid fa-house-user" style="color: #ffffff;"></i>Home</a></li>
                <li><a href="/admin/products"><i class="fa-solid fa-bag-shopping" style="color: #ffffff;"></i></i>Products</a></li>
                <li><a href=""><i class="fa-solid fa-user" style="color: #ffffff;"></i>Customer</a></li>
            </ul>
            <ul>
                <li><a href=""><i class="fa-solid fa-user" style="color: #ffffff;"></i><div>@yield('user')</div>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>

            </ul>
        </nav>
        <div class="container-right">@yield('container-right')</div>
    </div>
</body>
</html>
