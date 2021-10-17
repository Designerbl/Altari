<!-- Личный кабинет пользователя в который он сможет попасть после авторизации и увидеть список задач по работе с файлами выгрузки (таблицу) -->

@extends('layouts.app') <!-- Наследование кода от основного шаблона с мета данными и прочим -->
@section('title')Личный кабинет@endsection

@section('content') <!-- Блок кода, который подставляется в основной шаблон через команду yield('content') -->


<section class="content">
    <div class="container">

        <h1 class="fs-2 pb-2">Все задачи</h1>

        <div class="card">

            <div class="card-body p-0">
                <table class="table m-0">
                    <!-- Заголовки столбцов -->  
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                №
                            </th>
                            <th >
                                Задача
                            </th>
                            <th style="width: 15%">
                                Статус
                            </th>
                            <th style="width: 40%">
                                Комментарий
                            </th>
                        </tr>
                    </thead>

                    <!-- Наполнение таблицы -->
                    <tbody>
                        @foreach ($usertasks as $usertask)
                            <tr>
                                <!-- ID -->
                                <td>
                                    {{ $usertask['id']}}
                                </td>

                                <!-- Задача -->
                                <td>
                                    <a>
                                        {{ $usertask->option['name']}}
                                    </a>
                                    <br>
                                    <small>
                                        {{ $usertask['created_at']}}
                                    </small>
                                </td>
                                <td>
                                    {{ $usertask->processing_status['name']}}
                                </td>

                                <!-- Комментарий -->
                                <td>
                                    {{ $usertask['description']}}
                                </td>

                            </tr>                            
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</section>
@endsection
