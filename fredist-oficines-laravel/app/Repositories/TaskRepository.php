<?php


namespace App\Repositories;


use App\Models\Task;

class TaskRepository
{

    public static function index() {
        return Task::all();
    }

    public static function store(array $data) {
        return Task::create($data);
    }

    public static function show($id) {
        return Task::findOrFail($id);
    }

    public static function update($id, array $data) {
        $task = Task::findOrFail($id);
        $task->update($data);
        $task->refresh();
        return $task;
    }

    public static function destroy($id) {
        $task = Task::findOrFail($id);
        $task->delete();
        return $task;
    }


}
