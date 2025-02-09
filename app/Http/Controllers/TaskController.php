<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request) {
        $request->validate(['title' => 'required']);
        Task::create($request->all());
        return redirect('/');
    }

    public function edit($id) {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id) {
        $request->validate(['title' => 'required']);
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return redirect('/');
    }

    public function destroy($id) {
        Task::destroy($id);
        return redirect('/');
    }
}
