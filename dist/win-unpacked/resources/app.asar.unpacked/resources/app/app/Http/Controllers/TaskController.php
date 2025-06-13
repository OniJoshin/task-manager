<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    // Add create/edit/store/update/destroy later
}
