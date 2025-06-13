<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectGroupController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileController;

Route::get('/', fn() => redirect()->route('dashboard.index'));

Route::resource('clients', ClientController::class);
Route::resource('project-groups', ProjectGroupController::class);
Route::resource('tasks', TaskController::class);



Route::post('project-groups/{projectGroup}/files', [FileController::class, 'store'])
    ->name('project-groups.files.store');



Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


