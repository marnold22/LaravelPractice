<?php

namespace App\Http\Controllers;
use App\Task;

class TasksController extends Controller
{
    public function index(){
      //$tasks = DB::table('tasks')->latest()->get();
      $tasks = Task::all();
      return view('tasks.index', compact('tasks'));
    }

    public function show(Task $tasks){
      //$tasks = DB::table('tasks')->find($id); // Query built out long way
      //$tasks = Task::find($id);  // Query condensed using frameworks abilities. Don't need this because of Route Model Binding

      return view('tasks.show', compact('tasks'));
    }
}
