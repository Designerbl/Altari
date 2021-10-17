@extends('layouts.app')
@section('title')Личный кабинет@endsection

@section('content')


<section class="content">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1 class="fs-3">Все задачи</h1>                     
            <a class="btn btn-primary" href="{{ route('create') }}" role="button">Добавить</a>             
        </div>


        <div class="card">

            <div class="card-body p-0">
                <table class="table m-0">
                    <!-- Заголовки столбцов -->  
                    <thead class="table-light">
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
                                
                                <!-- № задачи -->
                                <td>
                                    {{-- {{ $usertask['id']}} --}}
                                    {{ $i = $i + 1 }} 
                                </td>

                                <!-- Задача -->
                                <td>
                                    <a>
                                        {{ $usertask->option['name']}}
                                    </a>
                                    <br>
                                    <small>
                                        {{ $usertask['created_at'] }}
                                    </small>
                                </td>
                                <td>
                                    @if ($usertask['processing_status_id'] == 2)
                                    <p class="text-success">{{ $usertask->processing_status['name']}}</p>
                                    @else
                                    {{ $usertask->processing_status['name']}}
                                    @endif
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
