@extends('layouts.admin_layout')
@section('title')Админ-панель - редактирование настроеки для задачи@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">  
        <h1 class="m-0">Редактирование: {{ $option['name'] }}</h1>
    </div>

    <!-- Сообщение при успешном добавлении -->
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
    @endif    
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
               
                    <form action="{{ route('options.update', $option['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                        
                            <!-- Поле наименование -->
                            <div class="form-group">
                                <label label for="exampleInputNameOption">Наименование</label>
                                <input type="text" name="name" value="{{ $option['name'] }}" class="form-control" id="exampleInputNameOption" required maxlength="40" minlength="4">
                            </div>

                            <div class="row">

                                <!-- Выбор типа задачи -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Тип задачи</label>

                                            <select name="task_type_id" class="form-control">
                                                @foreach ($tasktypes as $tasktype)
                                                    <option value="{{ $tasktype['id'] }}" 
                                                        @if ($tasktype['id'] == $option['task_type_id'])
                                                            selected
                                                        @endif>{{ $tasktype['name'] }}
                                                    </option>                                                    
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Выбор назначения -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Назначение</label>
                                            
                                            <select name="purpose_id" class="form-control">
                                                @foreach ($purposes as $purpose)
                                                    <option value="{{ $purpose['id'] }}" 
                                                        @if ($purpose['id'] == $option['purpose_id'])
                                                        selected
                                                     @endif>{{ $purpose['name'] }}
                                                    </option>                                                    
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
      
                        <!-- Кнопка добавить -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                  </div>
            </div>
        </div>
        
    </div>
</section>
@endsection