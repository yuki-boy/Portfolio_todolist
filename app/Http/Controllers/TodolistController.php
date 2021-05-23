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

    public function edit($id)
    {
        $todo_id = Todolist::find($id);
        return view('edit_todo', compact('todo_id'));
    }

    public function update(Request $request)
    {
        //
    }

    public function delete($id)
    {
        $todo_id = Todolist::find($id);
        return view('delete_todo', compact('todo_id'));
    }
}
