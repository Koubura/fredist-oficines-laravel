<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function index()
    {
        try {
            $data = TaskRepository::index();
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $data = TaskRepository::store($request->all());
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Task $task)
    {
        try {
            $data = $task;
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Task $task)
    {
        try {
            $data = TaskRepository::update($task->id, $request->all());
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Task $task)
    {
        try {
            $data = TaskRepository::destroy($task->id);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 400);
        }

        return response()->json($data);
    }
}
