<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/user/css/style.css">

</head>

<body>
    <div id="app">

        <header class="header ">
            <div class="head container d-md-flex justify-content-md-between align-items-md-center">
                <a href="{{ url('/') }}"><h1 class="logo"><span class="logo-inner">A</span>ltari</h1></a>
                
                <div class="" id="navbarSupportedContent">

                    <!-- Кнопки авторизации и регистрации -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Аунтефикация -->
                        @guest

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row g-2">

                                    <!-- Поле ввода почты -->
                                    <div class="col-5">
                                        <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Введите почту">
                                    </div>

                                    <!-- Поле ввода пароля -->
                                    <div class="col-5">
                                        <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Введите пароль">
                                    </div>

                                    <!-- Кнопка авторизации -->
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-submit btn-sm">Войти</button>
                                    </div>
                                </div>
                                
                                <div class="form-check pt-1">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label fs-6" for="remember">Запомнить меня</label>
                                </div>

                            </form>

                        @else <!-- Иначе появляется выпадающий список именем -->

                        @if (Auth::user()->hasRole('admin'))
                            <a class="nav-link nav-item" href="{{ route('homeAdmin') }}">Админ-панель</a>   
                        @else   
                            <a class="nav-link nav-item" href="{{ route('homeUser') }}">Задачи</a>                   
                        @endif

                        <li class="nav-item dropdown">

                            <!-- Отображение имени авторизированного пользователя -->
                                                    
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            
                            <!-- Пункты выпадающего списка -->
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                            
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </header>

        <main>
            @yield('content')

            @include('inc.footer')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>
