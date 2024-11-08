<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('task', [TaskController::class, 'index'])->name('task');

Route::get('addnew', [TaskController::class, 'addNewTask'])->name('addNew');

Route::post('save', [TaskController::class, 'store'])->name('save');