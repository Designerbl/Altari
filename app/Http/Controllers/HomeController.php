<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
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

        
        $usertasks = UserTask::where('user_id', Auth::user()->id)->get();
        $option = Option::get();
        $processing_status = ProcessingStatus::get();
        $user = User::get();

        return view('home',[
            'usertasks' => $usertasks,
            'option' => $option,
            'processing_status' => $processing_status,
            'user' => $user
        ]);
    }


}
