<?php

namespace App\Http\Controllers;

use App\Models\ProjectGroup;

class ProjectGroupController extends Controller
{
    public function show(ProjectGroup $projectGroup)
    {
        return view('tasks.index', [
            'projectGroup' => $projectGroup,
            'tasks' => $projectGroup->tasks
        ]);
    }
}
