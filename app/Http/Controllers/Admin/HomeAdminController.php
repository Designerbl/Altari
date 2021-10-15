<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserTask;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function index()
    {
        $user_count = User::all()->count(); // Количество всех пользователей
        $task_count = UserTask::all()->count();

        return view('admin.index',[
            'user_count' => $user_count,
            'task_count' => $task_count
        ]);
    }
}
