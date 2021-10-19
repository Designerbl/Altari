<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mode;
use App\Models\ProcessingStatus;
use App\Models\UserTask;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeUserController extends Controller
{
    public function index()
    {
        $i=0;

        $usertasks = UserTask::where('user_id', Auth::user()->id)->get();
        $task_counter = UserTask::where('user_id', Auth::user()->id)->count();

        $mode = Mode::get();
        $processing_status = ProcessingStatus::get();
        $user = User::get();

        return view('user.index',[
            'usertasks' => $usertasks,
            'mode' => $mode,
            'processing_status' => $processing_status,
            'user' => $user,
            'task_counter' => $task_counter,
            'i' => $i
        ]);
    }
}
