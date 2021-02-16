<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{


    public function store(Project $project)
    {

        $attribues = request()->validate([
            'description' => 'required',
        ]);

        $project->addTask($attribues);
        return back();
    }

}
