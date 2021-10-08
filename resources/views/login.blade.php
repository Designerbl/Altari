@extends('layouts.altari')
@section('title')Авторизация@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center h-100">
    <div class="card p-4">

        <p class="text-center center fw-bold fs-5" >Авторизация</p>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Логин</label>
            <input type="text" class="form-control" id="formGroupExampleInput">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Пароль</label>
            <input type="text" class="form-control" id="formGroupExampleInput2">
        </div>

        <button type="submit" class="btn btn-primary mb-3">Войти</button>
        <a role="button" href="/register" type="button" class="btn btn-outline-primary">Регистрация</a>
    </div>
</div>
