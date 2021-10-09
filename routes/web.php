<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
}) ->name('index');

Route::get('/login', function () { // Путь к странице
    return view('login'); // view('название страницы')
}) ->name('login'); // название функции по которму можно обращаться к этому обработчику

Route::post('/login/submit', function () {
    return view('person');
}) ->name('login-form');

Route::get('/register', function () {
    return view('register');
}) ->name('register');

Route::post('/register/submit', function () {
    return view('login');
}) ->name('register-form');

Route::get('/person', function () {
    return view('person');
}) ->name('person');