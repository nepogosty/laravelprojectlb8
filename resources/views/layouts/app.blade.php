<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="/css/style.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Панель Администрирования
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-3">
                <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
                    <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                        <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                        <span class="fs-5 fw-semibold">Заказы</span>
                    </a>
                    <div class="list-group list-group-flush border-bottom scrollarea">
                        <a href="#" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Даши</strong>
                                <small>Wed</small>
                            </div>
                            <div class="col-10 mb-1 small">RTX 3090</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">QWERTY</strong>
                                <small class="text-muted">Tues</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">List group item heading</strong>
                                <small class="text-muted">Mon</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">List group item heading</strong>
                                <small class="text-muted">Wed</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">List group item heading</strong>
                                <small class="text-muted">Tues</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">List group item heading</strong>
                                <small class="text-muted">Mon</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">List group item heading</strong>
                                <small class="text-muted">Wed</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">List group item heading</strong>
                                <small class="text-muted">Tues</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">List group item heading</strong>
                                <small class="text-muted">Mon</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">List group item heading</strong>
                                <small class="text-muted">Wed</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">List group item heading</strong>
                                <small class="text-muted">Tues</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">List group item heading</strong>
                                <small class="text-muted">Mon</small>
                            </div>
                            <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                        </a>
                    </div>
                </div>>
        </div>
        <div class="col-md-9">
            @yield('content')
         </main>
        </div>

        </div>


    </div>

</body>
</html>
