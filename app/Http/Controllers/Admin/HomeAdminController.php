<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserTask;
use App\Models\Mode;
use App\Models\ProcessingStatus;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function index()
    {
        // $user_count = User::all()->count(); // Количество всех пользователей
        // $task_count = UserTask::all()->count();

        // return view('admin.index',[
        //     'user_count' => $user_count,
        //     'task_count' => $task_count
        // ]);

        $usertasks = UserTask::get();
        $mode = Mode::get();
        $processing_status = ProcessingStatus::get();
        $user = User::get();

        return view('admin.index',[
            'usertasks' => $usertasks,
            'mode' => $mode,
            'processing_status' => $processing_status,
            'user' => $user
        ]);
    }
}
