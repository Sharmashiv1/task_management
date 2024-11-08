<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;
use League\CommonMark\Extension\TaskList\TaskListExtension;

class TaskController extends Controller
{
    //
    public function index(){
        $task = Task::get();
        return view('task', compact('task'));
    }


    // add new tadsk 
    public function addNewTask(){
        return view('addnew');
    }


    public function store(Request $request){
        $data = $request->validate([
            'task_name' => 'required',
            'is_completed' =>  'required',     
            'due_date' =>   'required',  
        ]);

        // dd($data);

        $task = Task::create([
            'task_name' => $request->task_name,
            'is_completed' => $request->is_completed,
            'due_date' => $request->due_date,

        ]);

        if($task){
            return redirect()->route('task');
        }
    }

}
