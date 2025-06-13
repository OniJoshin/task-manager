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

    public function create(Request $request)
    {
        $projectGroup = ProjectGroup::findOrFail($request->project_group_id);

        return view('tasks.create', compact('projectGroup'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_group_id' => 'required|exists:project_groups,id',
            'title' => 'required|string',
            'status' => 'required|in:pending,in_progress,completed',
            'priority' => 'required|in:-1,0,1',
            'due_date' => 'nullable|date',
        ]);

        Task::create($request->only([
            'project_group_id', 'title', 'description', 'status', 'priority', 'due_date'
        ]));

        return redirect()
            ->route('project-groups.show', $request->project_group_id)
            ->with('success', 'Task created successfully.');
    }

    // Add create/edit/store/update/destroy later
}
