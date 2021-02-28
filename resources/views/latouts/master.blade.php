<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('main.online_shop'): @yield('title')</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ route('index') }}" class="nav navbar-nav">@lang('mail.online_shop')</a>
        </div>

        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>

                <li class="dropdown">
                    <a href=""></a>
                    <ul>
                        @foreach ($currencies as $item)
                            <li><a href=""></a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href=""></a></li>
                @endguest

                @auth

                @endauth
            </ul>
        </div>
    </div>
</nav>

<!--Main block of template-->
<div class="container">
    <div class="starter-template"></div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p></p>
                <ul></ul>
            </div>
            <div class="col-lg-6">
                <p></p>
                <ul></ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>