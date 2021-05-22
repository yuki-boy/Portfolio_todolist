<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;


// Route::get('/', function () {
//     return view('todolist');
// });

Route::get('/todolist', [TodolistController::class, 'index'])->name('todolist');

Route::get('/create/todo', [TodolistController::class, 'create'])->name('create_todo');

Route::post('/save/todo', [TodolistController::class, 'save'])->name('save_todo');