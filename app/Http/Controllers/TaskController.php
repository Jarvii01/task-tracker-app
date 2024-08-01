<?php

namespace App\Http\Controllers;


use App\Http\Requests\TaskRequest;
use App\Http\Resources\Task\TaskResource;
use App\Http\Resources\User\UserResource;
use App\Models\Area;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index()
    {

        $tasks = Task::all();
        $tasks = TaskResource::collection($tasks)->resolve();


        return inertia('Task/Index', ['tasks' => $tasks]);
    }

    public function store(TaskRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->id();

        Task::create($data);

        return to_route('tasks.index');
    }

    public function show(Task $task)
    {

        dd($task);
        return inertia('Task/Show', ['task' => $task]);

    }
    public function create(Area $area)
    {

        return inertia('Task/Create', ['taskArea' => $area]);

    }

//

}
