<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::paginate(5);
        notify()->success(__('Role has been changed.'));
        return view('tasks', ['tasks' => $tasks]);
    }
}

