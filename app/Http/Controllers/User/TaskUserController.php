<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mode;
use App\Models\ProcessingStatus;
use App\Models\UserTask;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaskUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modes = Mode::get();
        $users = User::get();
        $processing_statuses = ProcessingStatus::get();

        return view('user.usertask.create',[
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
    public function store(Request $request)
    {
        
        $new_usertask = new UserTask();
        $new_usertask -> description = $request->input('description');
        $new_usertask -> processing_status_id = 1;
        $new_usertask -> user_id = Auth::user()->id;
        $new_usertask -> mode_id = $request->mode_id;

        $new_usertask -> save();

        return redirect()->back()->withSuccess('Готово!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserTask  $userTask
     * @return \Illuminate\Http\Response
     */
    public function show(UserTask $usertask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserTask  $userTask
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTask $usertask)
    {
        $modes = Mode::get();

        return view('user.usertask.edit',[
            'usertask' => $usertask,
            'modes' => $modes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserTask  $userTask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTask $usertask)
    {
        $usertask -> description = $request->input('description');
        // $usertask -> mode_id = $request->mode_id;

        $usertask -> save();

        return redirect()->back()->withSuccess('Готово!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserTask  $userTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTask $usertask)
    {
        //
    }
}
