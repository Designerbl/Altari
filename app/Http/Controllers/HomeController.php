<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mode;
use App\Models\PaymentStatus;
use App\Models\ProcessingStatus;
use App\Models\Purpose;
use App\Models\TaskType;
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

    public function create(){

        $modes = Mode::get();
        $users = User::get();
        $processing_statuses = ProcessingStatus::get();

        return view('create',[
            'users' => $users,
            'modes' => $modes,
            'processing_statuses' => $processing_statuses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function add(Request $request)
    {

        $new_usertask = new UserTask();
        $new_usertask -> description = $request->input('description');
        $new_usertask -> processing_status_id = 1;
        $new_usertask -> user_id = Auth::user()->id;
        $new_usertask -> mode_id = $request->mode_id;

       $new_usertask -> save();

        return redirect()->back()->withSuccess('Готово!');
    }
}
