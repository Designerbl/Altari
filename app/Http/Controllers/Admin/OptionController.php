<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\TaskType;
use App\Models\Purpose;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Option::get();
        $tasktype = TaskType::get();
        $purpose = Purpose::get();

        return view('admin.option.index',[
            'options' => $options,
            'tasktypes' => $tasktype,
            'purposes' => $purpose
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasktypes = TaskType::get();
        $purposes = Purpose::get();

        return view('admin.option.create',[
            'tasktypes' => $tasktypes,
            'purposes' => $purposes
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
        $new_option = new Option();
        $new_option -> name = $request->input('name');
        $new_option -> task_type_id = $request->task_type_id;
        $new_option -> purpose_id = $request->purpose_id;
        $new_option -> save();

        return redirect()->back()->withSuccess('Добавление прошло успешно!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        $tasktypes = TaskType::get();
        $purposes = Purpose::get();

        return view('admin.option.edit',[
            'option' => $option,
            'tasktypes' => $tasktypes,
            'purposes' => $purposes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Option $option)
    {
        $option ->name = $request->name;
        $option -> task_type_id = $request->task_type_id;
        $option -> purpose_id = $request->purpose_id;

        $option -> save();
        return redirect()->back()->withSuccess('Редакирование прошло успешно!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        $option->delete();
        return redirect()->back()->withSuccess('Удаление прошло успешно!');
    }
}
