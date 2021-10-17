<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserTask;
use App\Models\ProcessingStatus;
use App\Models\Option;
use App\Models\User;
use Illuminate\Http\Request;

class UserTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usertasks = UserTask::get();
        $option = Option::get();
        $processing_status = ProcessingStatus::get();
        $user = User::get();

        return view('admin.usertask.index',[
            'usertasks' => $usertasks,
            'option' => $option,
            'processing_status' => $processing_status,
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserTask  $userTask
     * @return \Illuminate\Http\Response
     */
    public function show(UserTask $userTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserTask  $userTask
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTask $userTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserTask  $userTask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTask $userTask)
    {
        if($userTask -> processing_status_id == 1){
          $userTask -> processing_status_id = 2;
          $userTask -> save();  
        } else {
            $userTask -> processing_status_id = 1;
            $userTask -> save();  
        }
        
        $userTask -> save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserTask  $userTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTask $userTask)
    {
        $userTask->delete();
        return redirect()->back()->withSuccess('Удаление прошло успешно!');
    }
}
