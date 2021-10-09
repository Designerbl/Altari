<!-- На этой странице будет происходить авторизация пользователя -->

@extends('layouts.altari') <!-- Наследование кода от основного шаблона с мета данными и прочим -->
@section('title')Авторизация@endsection 

<!-- Здесь прописывается код только для авторизации -->
@section('content') <!-- Блок кода, который подставляется в основной шаблон через команду yield('content') -->
<div class="bg-light">
    <div class="container d-flex justify-content-center align-items-center h-100">

        <form class="card px-5 py-4" action="{{ route('login-form') }}" method="post">
            @csrf

            <p class="text-center center fw-bold fs-5" >Авторизация</p>            
            
            <div class="mb-3">
                <label for="login" class="form-label">Логин</label>
                <input type="text" id="login" name="login" class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="text" id="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mb-3">Войти</button>
            <a role="button" href="{{route('register')}}" type="button" class="btn btn-outline-primary mb-3">Регистрация</a>
            <div class="text-center">
                <a href="{{route('index')}}">Назад</a>          
            </div>

        </form>

    </div>
</div>
