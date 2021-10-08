@extends('layouts.altari')
@section('title')Регистрация@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center h-100">
    <div class="card p-4">

        <p class="text-center fw-bold fs-5" >Регистрация</p>

        <div class="mb-3">
            <label for="Login" class="form-label">Логин</label>
            <input type="text" class="form-control" id="Login">
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="Name">
        </div>

        <div class="mb-3">
            <label for="Email" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="Email">
        </div>

        <div class="mb-3">
            <label for="Phone" class="form-label">Телефон</label>
            <input type="text" class="form-control" id="Phone">
        </div>

        <div class="mb-3">
            <label for="Password" class="form-label">Пароль</label>
            <input type="text" class="form-control" id="Password">
        </div>

        <button type="submit" class="btn btn-primary mb-3">Зарегистрироваться</button>
        <a role="button" href="/" type="button" class="btn btn-outline-primary">Назад</a>
    </div>
</div>
