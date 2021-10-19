<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserTaskController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {// Путь к странице
    return view('index');// view('название страницы')
}) ->name('index');// название функции по которму можно обращаться к этому обработчику

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/home/create/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add');



Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeAdminController::class, 'index'])->name('homeAdmin');

    // Новые категории для админки
    Route::resource('users', UserController::class);
    Route::resource('userTasks', UserTaskController::class);
});