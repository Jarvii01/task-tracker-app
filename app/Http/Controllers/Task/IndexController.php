<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Task $task)
    {
        $users = User::all();

        $tasks = Task::all();

        $images = Image::all();

        return inertia('Task/Index', [
            'users' => $users,
            'images' => $images,
            'tasks' => $tasks,
        ]);
    }
}
