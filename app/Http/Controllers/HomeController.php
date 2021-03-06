<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mode;
use App\Models\ProcessingStatus;
use App\Models\UserTask;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $i=0;

        $usertasks = UserTask::where('user_id', Auth::user()->id)->get();
        $task_counter = UserTask::where('user_id', Auth::user()->id)->count();

        $mode = Mode::get();
        $processing_status = ProcessingStatus::get();
        $user = User::get();

        return view('home',[
            'usertasks' => $usertasks,
            'mode' => $mode,
            'processing_status' => $processing_status,
            'user' => $user,
            'task_counter' => $task_counter,
            'i' => $i
        ]);
    }

}
