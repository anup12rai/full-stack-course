<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function index(){
   $task = Task::all();
   return $task;
   return view('tasks.index', compact('stacks'));
   }
   /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|min:10',
            'description' => 'nullable|string|max:1000',

        ]);
        Task::create($request->only('title', 'description'));
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255|min:10',
            'description' => 'nullable|string|max:1000',

        ]);
        $task->update($request->only('title', 'description'));
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
        //
    }
}
