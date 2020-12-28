<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class TaskController extends Controller
{
    public function index()
    {
        $collection = Task::all();
        $sorted = $collection->sortBy("id");
        return $sorted->values()->all();
    }
    public function show(Task $task)
    {
        return $task;
    }
    public function store(Request $request)
    {
        return Task::create($request->all());
    }
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return $task;
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return $task;
    }
}