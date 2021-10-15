@extends('layouts.admin_layout')
@section('title')Админ-панель - главная страница@endsection

@section('content')

<!-- Шапка контента -->
<div class="content-header">
    <div class="container-fluid">  
        <h1 class="m-0">Главная страница</h1>
    </div>
</div>

<!-- Основной контент -->
<section class="content">
    <div class="container-fluid">

        <!-- Информационные карточки -->
        <div class="row">

            <!-- Первая карточка -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
    
                    <div class="info-box-content">
                        <span class="info-box-text">Пользователи</span>
                        <span class="info-box-number">{{$user_count}}</span>
                    </div>
                </div>
            </div>

            <!-- Вторая карточка -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-calendar"></i></span>
  
                    <div class="info-box-content">
                        <span class="info-box-text">Задачи</span>
                        <span class="info-box-number">{{$task_count}}</span>
                    </div>
                </div>
            </div>
 
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
            
        </div>
    </div>
</section>
@endsection