<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
{
    $tasks = Task::where('user_id', auth()->id())->get();
    return view('tasks.index', compact('tasks'));
}

public function create()
{
    return view('tasks.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'status' => 'required|in:Pending,In Progress,Completed',
        'due_date' => 'required|date',
    ]);

    Task::create([
        'title' => $request->title,
        'description' => $request->description,
        'status' => $request->status,
        'due_date' => $request->due_date,
        'user_id' => auth()->id(),
    ]);

    return redirect()->route('tasks.index');
}

public function edit(Task $task)
{
    return view('tasks.edit', compact('task'));
}

public function update(Request $request, Task $task)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'status' => 'required|in:Pending,In Progress,Completed',
        'due_date' => 'required|date',
    ]);

    $task->update($request->only('title', 'description', 'status', 'due_date'));

    return redirect()->route('tasks.index');
}
public function show(Task $task)
{
    return view('tasks.show', compact('task')); // Ensure you have the view `tasks.show`
}

public function destroy(Task $task)
{
    $task->delete();
    return redirect()->route('tasks.index');
}

}
