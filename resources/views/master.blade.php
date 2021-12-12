<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Главная</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <link href="/css/starter-template.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet" >
</head>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
                    <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
                </svg>
                GamingLaptop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('index')}}">Все товары</a></li>
                <li><a href="{{route('firms')}}">Производители</a>
                </li>
                <li><a href="{{route('basket')}}">В корзину</a></li>
{{--                <li><a href="{{route('index')}}">Сбросить проект в начальное состояние</a></li>--}}
{{--                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>--}}

{{--                <li class="dropdown">--}}
{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>--}}
{{--                        <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>--}}
{{--                        <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://internet-shop.tmweb.ru/login">Войти</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
@yield('content')
</div>


</body></html>
