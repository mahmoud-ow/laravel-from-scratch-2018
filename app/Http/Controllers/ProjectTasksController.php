<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function update(Task $task){
        
        $task->update([
            'completed' => request()->has('completed')
        ]);
        return redirect()->back();
        
    }
}
