<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\CommentRequest;
use App\Models\Comment;
use App\Models\Task;
use Illuminate\Http\Request;

class CommentStoreController extends Controller
{
    public function __invoke(Task $task, CommentRequest $request)
    {
        $data = $request->validated();

        $data['task_id'] = $task->id;
        $data['user_id'] = auth()->id();

        Comment::query()->create($data);

        return redirect()->back()->withoutFragment();
    }
}
