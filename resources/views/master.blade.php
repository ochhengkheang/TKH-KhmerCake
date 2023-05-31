<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- link to font aswson to use icon --}}
    <script src="https://kit.fontawesome.com/be05b4c600.js" crossorigin="anonymous"></script>

    {{-- move folder css from resources to public than link it with asset function --}}
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">

    {{-- @yield('name') act like a variable where we use section('name') to overwrite and extend('location') to locate where we want to overwrite it --}}
    <title>@yield('title')</title>
</head>
<body>
    <div class="top">
        <div class="top-menu">
            <div class="top-menu-language">
                <a href="#">EN <img src="https://th.bing.com/th/id/OIP.U-h9wYdOSH047roWjY_1TgHaE3?pid=ImgDet&rs=1" alt="photo"></a>
            </div>
            <div class="top-menu-user">
                <a href="#">Register</a> |
                <a href="#">My Account</a> |
                <a href="#">Login</a>
            </div>
        </div>
        {{-- img_link come from symbolic link - find it at config/filesystems.php --}}
        <div class="top-logo">
            <a href="#"><img src="https://th.bing.com/th/id/OIP._MBLlhKgYdEgdNsY-oY6FwAAAA?pid=ImgDet&rs=1" alt="photo"></a>
            <h5>KCTT</h5>
        </div>
    </div>
    <div class="top-nav">
        <img src="{{asset('/img/pkha_chan.png')}}" alt="photo">
        <a href="#">Home</a>
        <img src="{{asset('/img/pkha_chan.png')}}" alt="photo">
        <a href="#">Type</a>
        <img src="{{asset('/img/pkha_chan.png')}}" alt="photo">
        <a href="#">New</a>
        <img src="{{asset('/img/pkha_chan.png')}}" alt="photo">
        <a href="#">Contact US</a>
        <img src="{{ asset('/img/pkha_chan.png')}}" alt="photo">
    </div>

    {{-- body get from other child files --}}
    <div class="container">
        <div class="container-head"></div>
        <div class="container-body">@yield('container-body')</div>
        <div class="container-footer">
            <span class="container-footer-name">
                <p>Developed by:</p>
                <p>Pen Techmeng</p>
                <p>Oeung Chhengkheang</p>
                <p>Siek Tongheng</p>
                <p>Seang Kongheng</p>
                <p>Lim Seangleang</p>
                <p>Eang Ngingi</p>
            </span>
            <span class="container-footer-follow">
                <p>Follow Us</p>
                <a href=""><i class="fa-brands fa-facebook" style="color: #71a3f9;"></i><p>KCTT Snack Group</p></a>
                <a href=""> <i class="fa-brands fa-telegram" style="color: #71a3f9;"></i><p>KCTT Snack Group</p></a>
            </span>
            <span class="container-footer-download">
                <p>Download</p>
                <a href="#"><img src="{{ asset('/img/App_Store.png') }}" alt="photo"></a>
                <a href="#"><img src="{{ asset('/img/Andriod.png') }}" alt="photo"></a>
            </span>
        </div>
    </div>
</body>
</html>
