@extends('layouts.admin_layout')
@section('title')Админ-панель - все настройки задачи@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">  
        <h1 class="m-0">Все настройки задач</h1>
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
                                Наименование
                            </th>
                            <th>
                                Тип задачи
                            </th>
                            <th>
                                Назначение
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>

                    <!-- Наполнение таблицы -->
                    <tbody>
                        @foreach ($options as $option)
                            <tr>
                                <!-- ID -->
                                <td>
                                    {{ $option['id']}}
                                </td>

                                <!-- Наименование -->
                                <td>
                                    <a>
                                        {{ $option['name']}}
                                    </a>
                                    <br>
                                    <small>
                                        {{ $option['created_at']}}
                                    </small>
                                </td>

                                <!-- Тип задачи -->
                                <td>
                                    {{ $option['task_type_id']}}
                                </td>

                                <!-- Назначение -->
                                <td>
                                    {{ $option['purpose_id']}}
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