@extends('layouts.admin_layout')
@section('title')Админ-панель - добавление пользователя@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">  
        <h1 class="m-0">Добавить пользователя</h1>
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
               
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <div class="card-body">
                        
                            <!-- Поле имя -->
                            <div class="form-group">
                                <label label for="exampleInputNameOption">Имя</label>
                                <input type="text" name="name" class="form-control" id="exampleInputNameOption" placeholder="Введите имя для нового пользователя" minlength="4" maxlength="24" required>
                            </div>

                            <!-- Поле почта -->
                            <div class="form-group">
                                <label label for="exampleInputNameOption">Почта</label>
                                <input type="email" name="email" class="form-control" id="exampleInputNameOption" placeholder="Введите почту для нового пользователя" minlength="4" required>
                            </div>

                            <!-- Поле пароль -->
                            <div class="form-group">
                                <label label for="exampleInputNameOption">Пароль</label>
                                <input id="password" type="password" minlength="8" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Введите пароль для нового пользователя">
                            </div>

    
                            <!-- Поле ввода Повторите пароль -->
                            <div class="form-group">
                                <label label for="exampleInputNameOption">Повторный пароль</label>
                                <input id="password-confirm" type="password" minlength="8" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Повторите пароль для нового пользователя">
                            </div>

                        </div>
      
                        <!-- Кнопка добавить -->
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