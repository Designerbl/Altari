@extends('layouts.app') <!-- Наследование кода от основного шаблона с мета данными и прочим -->
@section('title')Altari - админ-панель@endsection

@section('content') <!-- Блок кода, который подставляется в основной шаблон через команду yield('content') -->
<div class="container">
    <div class="card border-success">
        <div class="card-body text-success">
            <h5 class="card-title">Готово!</h5>
            <p class="card-text">Вы успешно авторизированы как администратор.</p>
        </div>
    </div>        
</div>
@endsection