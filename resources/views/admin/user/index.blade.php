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
                                    {{$user->getRoleNames()}}
                                </td>

                                <!-- Почта -->
                                <td>
                                    {{ $user['email']}}
                                </td>

                                <!-- Кнопки взаимодействий -->
                                <td class="project-actions text-right">

                                    <!-- Кнопка блокировки -->
                                    <form class="d-inline" action="{{ route('users.update', $user['id']) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        @if ($user->hasRole('admin'))
                                            <button class="btn btn-warning btn-sm " href="#" disabled>
                                                <i class="fas fa-ban"></i>
                                            </button> 
                                        @else   
                                            @if ($user->hasRole('user'))
                                                <button class="btn btn-warning btn-sm" href="#">
                                                    <i class="fas fa-ban"></i>
                                                </button>                                            
                                            @else
                                            <button class="btn btn-success btn-sm" href="#">
                                                <i class="fas fa-check"></i>
                                            </button> 
                                            @endif                                               

                                        @endif

                                    </form>



                                    <!-- Кнопка удалить -->
                                    <form class="d-inline" action="{{ route('users.destroy', $user['id']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
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