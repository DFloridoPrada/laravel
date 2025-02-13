<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $tasks = Task::paginate(10);
        return view('home', ['tasks' => $tasks]);
    }
}
