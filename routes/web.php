<?php

use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserTaskController;
use App\Models\UserTask;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {// Путь к странице
    return view('index');// view('название страницы')
}) ->name('index');// название функции по которму можно обращаться к этому обработчику

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/home/create/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add');

// // Админская панель
// Route::group(['middleware' => ['role:admin']], function () {
//     Route::get('/homeAdmin123', function () {// Путь к странице
//         return view('homeAdmin123');// view('название страницы')
//     });
// });

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeAdminController::class, 'index'])->name('homeAdmin');

    // Новые категории для админки
    Route::resource('users', UserController::class);
    Route::resource('userTasks', UserTaskController::class);
});