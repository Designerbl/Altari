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
                                    <a class="btn btn-success btn-sm" href="#">
                                        <i class="fas fa-check"></i>
                                    </a>

                                    <!-- Кнопка удалить -->
                                    <form class="d-inline" action="{{ route('userTasks.destroy', $usertask['id']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn" href="#">
                                            <i class="fas fa-trash"></i>
                                        </button>                                        
                                    </form>
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