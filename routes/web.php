<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;


// Route::get('/', function () {
//     return view('todolist');
// });

Route::get('/todolist', [TodolistController::class, 'index'])->name('todolist');

Route::get('/create_todo', [TodolistController::class, 'create'])->name('create_todo');

Route::post('/save_todo', [TodolistController::class, 'save'])->name('save_todo');

Route::get('/edit_todo/{id}', [TodolistController::class, 'edit'])->name('edit_todo');


Route::get('/delete_todo/{id}', [TodolistController::class, 'delete'])->name('delete_todo');