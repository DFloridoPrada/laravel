<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        // $tasks = Task::take(12) -> get();
        $tasks = Task::paginate(10);
        //dd($tasks);
        return view('task.index', ['tasks' => $tasks]);
    }
}
