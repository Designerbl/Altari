@extends('layouts.admin_layout')
@section('title')Админ-панель - создание настроек задачи@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">  
        <h1 class="m-0">Добавить настройку задачи</h1>
    </div>

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
               
                    <form>
                        @csrf

                        <div class="card-body">
                        
                            <!-- Поле наименование -->
                            <div class="form-group">
                                <label label for="exampleInputNameOption">Наименование</label>
                                <input type="text" name="name" class="form-control" id="exampleInputNameOption" required maxlength="40" minlength="4">
                            </div>

                            <div class="row">

                                <!-- Выбор типа задачи -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Тип задачи</label>
                                            <select class="form-control">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Выбор назначения -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Назначение</label>
                                            <select class="form-control">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
      
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                  </div>
            </div>
        </div>
        
    </div>
</section>
@endsection