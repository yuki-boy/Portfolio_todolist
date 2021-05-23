<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index()
    {
        $todos = Todolist::orderBy('id', 'asc')->get();

        return view('todolist', compact('todos'));
    }

    public function create()
    {
        return view('create_todo');
    }

   
    public function save(Request $request)
    {
        $validatedDate = $request->validate([
            'task_name' => 'required',
            'task_description' => 'required',
            'estimate_hour' => 'required',
        ],
        [
            'task_name.required' => 'タスク名を入力して下さい',
            'task_description.required' => 'タスク名を入力して下さい',
            'estimate_hour.required' => 'タスク期限を入力して下さい',
        ]);

        $todo = new Todolist();
        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description;
        $todo->estimate_hour = $request->estimate_hour;
        $todo->save();

        return redirect('/todolist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function show(Todolist $todolist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function edit(Todolist $todolist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todolist $todolist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todolist $todolist)
    {
        //
    }
}
