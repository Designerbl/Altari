<!-- Личный кабинет пользователя в который он сможет попасть после авторизации и увидеть список задач по работе с файлами выгрузки (таблицу) -->

@extends('layouts.altari') <!-- Наследование кода от основного шаблона с мета данными и прочим -->
@section('title')Личный кабинет@endsection

@section('content') <!-- Блок кода, который подставляется в основной шаблон через команду yield('content') -->
<div class="container">
    <div class="pt-5">
        <div class="card border-success">
            <div class="card-body text-success">
                <h5 class="card-title">Готово!</h5>
                <p class="card-text">Вы успешно авторизированы.</p>
            </div>
        </div>        
    </div>
</div>
