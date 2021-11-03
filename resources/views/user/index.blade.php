@extends('layouts.app')
@section('title')Личный кабинет@endsection

@section('content')


<section class="content">
    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1 class="fs-3">Все задачи</h1>                     
            <a class="btn btn-altari" href="{{ route('usertasks.create') }}" role="button">Добавить</a>             
        </div>


        <div class="card border-0 rounded-3">

            <div class="card-body p-0">
                <table class="table align-middle m-0">
                    <!-- Заголовки столбцов -->  
                    <thead class="table-light">
                        <tr>
                            <th style="width: 1%">
                                №
                            </th>
                            <th >
                                Задача
                            </th>
                            <th style="width: 20%">
                                Статус
                            </th>
                            <th style="width: 40%">
                                Комментарий
                            </th>
                            <th style="width: 5%">
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
                                        {{ $usertask->mode['name']}}
                                    </a>
                                    <br>
                                    <small>
                                        {{ $usertask['created_at'] }}
                                    </small>
                                </td>
                                <td>
                                    @if ($usertask['processing_status_id'] == 1)
                                        <p class="text-warning  m-0">{{ $usertask->processing_status['name']}}</p>
                                    @else
                                        @if ($usertask['processing_status_id'] == 2)
                                            <p class="text-primary  m-0">{{ $usertask->processing_status['name']}}</p>
                                        @else
                                            <p class="text-success  m-0">{{ $usertask->processing_status['name']}}</p>
                                        @endif
                                    @endif
                                </td>

                                <!-- Комментарий -->
                                <td>
                                    {{ $usertask['description']}}
                                </td>

                                <td>  
                                    @if ($usertask['processing_status_id'] == 1)
                                        <button class="btn btn- btn-sm" disabled>
                                            <i class="fas fa-download"></i>
                                        </button> 
                                    @else
                                        @if ($usertask['processing_status_id'] == 2)
                                            <a class="btn btn-primary btn-sm" href="{{ route('usertasks.edit', $usertask['id']) }}" disabled>
                                                <i class="fas fa-cog"></i>
                                            </a> 
                                        @else
                                            <a class="btn btn-success btn-sm">
                                                <i class="fas fa-download"></i>
                                            </a>                                          
                                        @endif
                                          
                                    @endif                                  
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
