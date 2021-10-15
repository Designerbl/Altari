@extends('layouts.admin_layout')
@section('title')Админ-панель - все задачии@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">  
        <h1 class="m-0">Все задачи</h1>
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
                                Задача
                            </th>
                            <th>
                                Статус
                            </th>
                            <th>
                                Пользователь
                            </th>
                            <th>
                                Комментарий
                            </th>
                            <th style="width: 20%">
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
                                        {{ $usertask['option_id']}}
                                    </a>
                                    <br>
                                    <small>
                                        {{ $usertask['created_at']}}
                                    </small>
                                </td>
                                <td>
                                    {{ $usertask['processing_status_id']}}
                                </td>

                                <!-- Пользователь -->
                                <td>
                                    {{ $usertask['user_id']}}
                                </td>

                                <!-- Комментарий -->
                                <td>
                                    {{ $usertask['description']}}
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