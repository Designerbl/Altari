@extends('layouts.app')

@section('title')Личный кабинет@endsection

@section('content')

<div class="container">
    
    <h1 class="fs-3 mb-2">Добавление новой задачи</h1>  
    
        <!-- Сообщение при успешном добавлении -->
    @if (session('success'))
        <div class="alert alert-success p-2" role="alert">
            <h4 class="fs-5 m-0" ><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
    @endif  
    
    <div class="card">
        <form action="{{ route('add') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Поле наименование -->
                        <div class="form-group pb-3">
                            <label label for="exampleInputNameOption">Выбор файла для обработки</label>
                            <input type="file" name="file" class="form-control" id="exampleInputNameOption">
                        </div>                        
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group pb-3">
                            <label>Выбор настройки</label>

                            <select name="mode_id" class="form-select">
                                @foreach ($modes as $mode)
                                    <option value="{{ $mode['id'] }}" >{{ $mode['name'] }}</option>                                                    
                                @endforeach
                            </select>
                        </div>                         
                    </div>
                    <!-- Выбор настройки -->
                   
                </div>

                <!-- Поле наименование -->
                <div class="form-group pb-3">
                    <label label for="exampleInputNameOption">Комментарий</label>
                    <textarea style="min-height: 84px; max-height: 126px;" type="text" name="description" class="form-control" id="exampleInputNameOption" maxlength="320" placeholder="Необязательное поле"></textarea>
                </div>

                <!-- Кнопка добавить -->
                
                <button type="submit" class="btn btn-primary">Добавить</button>

            </div>
        </form>
    </div>
    
</div>

@endsection