<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Task;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Task $task, Comment $comment)
    {

        $task->delete();


        return to_route('tasks.index');
    }
}
