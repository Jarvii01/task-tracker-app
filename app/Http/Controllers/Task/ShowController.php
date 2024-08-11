<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Task;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Task $task)
    {
        $comments = $task->comment()->get();

        $images = $task->image()->get();



        return inertia('Task/Show', [
                'images' => $images,
                'task' => $task,
                'comments' => $comments
            ]
        );
    }

}
