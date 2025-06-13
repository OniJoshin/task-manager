<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectGroupController;
use App\Http\Controllers\TaskController;

Route::get('/', fn() => redirect()->route('clients.index'));

Route::resource('clients', ClientController::class);
Route::resource('project-groups', ProjectGroupController::class);
Route::resource('tasks', TaskController::class);

