@extends('layouts.admin_layout')
@section('title')Админ-панель - все пользователи@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">  
        <h1 class="m-0">Все пользователи</h1>
    </div>
</div>

<section class="content">
    <div class="container-fluid">

        <div class="card">

            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <!-- Заголовки столбцов -->  
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                №
                            </th>
                            <th >
                                Имя
                            </th>
                            <th>
                                Роль
                            </th>
                            <th>
                                Почта
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>

                    <!-- Наполнение таблицы -->
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <!-- ID -->
                                <td>
                                    {{ $user['id']}}
                                </td>

                                <!-- Имя -->
                                <td>
                                    <a>
                                        {{ $user['name']}}
                                    </a>
                                    <br>
                                    <small>
                                        {{ $user['created_at']}}
                                    </small>
                                </td>
                                <td>
                                    Какая-то роль
                                </td>

                                <!-- Почта -->
                                <td>
                                    {{ $user['email']}}
                                </td>

                                <!-- Кнопки взаимодействий -->
                                <td class="project-actions text-right">

                                    <!-- Кнопка редактировать -->
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <!-- Кнопка удалить -->
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash"></i>
                                    </a>
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