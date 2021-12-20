<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Интернет Магазин: Главная</title>

    {{--
      <script src="/js/jquery.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <link href="/css/bootstrap.min.css" rel="stylesheet" >
      --}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/style.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="text-center ">
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{route('index')}}" class="nav-link px-2 ">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
                            <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
                        </svg> GamingLaptop
                    </a></li>
                <li><a href="{{route('index')}}" class="nav-link px-2 text-white">Все товары</a></li>
                <li><a href="{{route('firms')}}" class="nav-link px-2 text-white">Производители</a></li>
                <li><a href="{{route('basket')}}" class="nav-link px-2 text-white">Корзина</a></li>
            </ul>
            {{--<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form> --}}

            <div class="text-end">
                @guest
                    <button type="button"  class="btn btn-outline-light me-2"><a href="{{route('login')}}">Войти</a></button>
                    <button type="button" class="btn btn-warning"><a href="{{route('register')}}" >Зарегистрироваться</a></button>
                @endguest
                @auth
                    <button type="button" class="btn btn-warning"><a href="{{route('home')}}" >Администрирование</a></button>
                    <button type="button" class="btn btn-warning"><a href="{{route('get-logout')}}" >Выйти</a></button>
                @endauth
            </div>
        </div>
    </div>
    {{--nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('index')}}">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
                        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
                    </svg>
                    GamingLaptop
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('index')}}">Все товары</a>
                    </li>
                    <li>
                        <a href="{{route('firms')}}">Производители</a>
                    </li>
                    <li>
                        <a href="{{route('basket')}}">В корзину</a>
                    </li>
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
    {{--</ul>
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="http://internet-shop.tmweb.ru/login">Войти</a>
        </li>
    </ul>
    </div>
    </div>
    </nav> --}}
</header>


<div class="container ">

    @if(session()->has('success'))
        <p style='margin-top: 20px' class="alert alert-success ">{{session()->get('success')}}</p>
    @endif
    @if(session()->has('warning'))
        <p style='margin-top: 20px' class="alert alert-warning ">{{session()->get('warning')}}</p>
    @endif
    @yield('content')
</div>

<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2021, Интернет-технологии</p>
</footer>
</body>
</html>
