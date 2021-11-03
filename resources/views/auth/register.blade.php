@extends('layouts.app')
@section('title')Altari - регистрация@endsection
@section('content')
<div class="container d-flex justify-content-center py-5">

    <div class="card">
        
        <div class="card-header">{{ __('Регистрация') }}</div>

        <div class="card-body px-5">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Поле ввода Имя -->
                <div class="form-group mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>

                    <div class="">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Поле ввода Почта -->
                <div class="form-group mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Почта') }}</label>

                    <div class="">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Поле ввода Пароль -->
                <div class="form-group mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                    <div class="">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Поле ввода Повторите пароль -->
                <div class="form-group mb-4">
                    <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Повторите пароль') }}</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <!-- Кнопка Зарегистрироваться -->
                <div class="form-group mb-0">
                    <div class="">
                        <button type="submit" class="btn btn-altari">
                            {{ __('Зарегистрироваться') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
