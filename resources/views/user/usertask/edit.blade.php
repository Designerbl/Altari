@extends('layouts.app')

@section('title')Личный кабинет@endsection

@section('content')

<div class="container py-5">
    
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="fs-3">Редактирование задачи</h1>                     
        <a class="btn btn-outline-primary" href="{{ route('homeUser') }}" role="button">Назад</a>             
    </div>

    
        <!-- Сообщение при успешном добавлении -->
    @if (session('success'))
        <div class="alert alert-success p-2" role="alert">
            <h4 class="fs-5 m-0" ><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
    @endif  
    
    <div class="card">
        <form action="{{ route('usertasks.update', $usertask['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">

                {{-- <div class="row">
                    <div class="col-lg-6">
                        <!-- Поле наименование -->
                        <div class="form-group pb-3">
                            <label label for="exampleInputNameOption">Выбор файла для обработки</label>
                            <input type="file" name="file" class="form-control" id="exampleInputNameOption">
                        </div>                        
                    </div>

                    <!-- Выбор режима -->
                    <div class="col-lg-6">
                        <div class="form-group pb-3">
                            <label>Выбор режима</label>

                            <select name="mode_id" class="form-select">
                                @foreach ($modes as $mode)
                                    <option value="{{ $mode['id'] }}" 
                                        @if ($mode['id'] == $usertask['mode_id'])
                                            selected
                                        @endif>{{ $mode['name'] }}
                                    </option>                                                     
                                @endforeach
                            </select>
                        </div>                         
                    </div>                 
                </div> --}}

                <!-- Поле комментария -->
                <div class="form-group pb-3">
                    <label label for="exampleInputNameOption">Комментарий</label>
                    <input type="text" value="{{ $usertask['description'] }}" name="description" class="form-control" id="exampleInputNameOption" maxlength="150">
                </div>

                <!-- Кнопка добавить -->
                
                <button type="submit" class="btn btn-primary">Сохранить</button>

            </div>
        </form>
    </div>
    
</div>

@endsection