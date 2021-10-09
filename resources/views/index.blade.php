<!-- Главная страница -->

@extends('layouts.altari') <!-- Наследование кода от основного шаблона с мета данными и прочим -->
@section('title')Главная страница@endsection

<!-- Здесь прописывается код только для главной страницы -->
@section('content') <!-- Блок кода, который подставляется в основной шаблон через команду yield('content') -->
<div class="container">
    @include('inc.header')<!-- Вставляется блок header -->

    <!-- Блок-заглушка -->
    <div class="p-5 my-4 bg-light rounded-3">
        <h5 class="card-title">Какой-то заголовок</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa animi ipsam debitis nostrum est provident cumque. Debitis deserunt aspernatur totam beatae, reiciendis, est quis ab quas nostrum numquam natus atque.</p>
        <a href="#" class="btn btn-primary px-3">Подрбнее</a>
    </div>
    
    @include('inc.footer') <!-- Вставляется блок footer -->
</div>
@endsection