<?php

use App\Models\UserTask;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {// Путь к странице
    return view('index');// view('название страницы')
}) ->name('index');// название функции по которму можно обращаться к этому обработчику

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Админская панель
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/homeAdmin123', function () {// Путь к странице
        return view('homeAdmin123');// view('название страницы')
    });
});

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeAdminController::class, 'index'])->name('homeAdmin');

    // Новые категории для админки
    Route::resource('users', UsersController::class);
});