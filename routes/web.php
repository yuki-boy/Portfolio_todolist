<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', [TodolistController::class, 'newindex'])->name('index');

Route::get('/todolist', [TodolistController::class, 'index'])->name('todolist');

Route::get('/create_todo', [TodolistController::class, 'create'])->name('create_todo');

Route::post('/save_todo', [TodolistController::class, 'save'])->name('save_todo');

Route::get('/edit_page/{id}', [TodolistController::class, 'editPage'])->name('edit_page');

Route::post('/edit_todo/{id}', [TodolistController::class, 'edit'])->name('edit_todo');

Route::get('/delete_page/{id}', [TodolistController::class, 'deletePage'])->name('delete_page');

Route::post('/delete_todo/{id}', [TodolistController::class, 'delete'])->name('delete_todo');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
