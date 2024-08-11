<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\UpdateRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Task $task, UpdateRequest $request)
    {


        $task->update($request->validated());


        return to_route('tasks.show', $task);
    }
}
