<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Resources\Image\ImageResource;
use App\Http\Resources\Task\TaskResource;
use App\Http\Resources\User\UsersResource;
use App\Models\Image;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function __invoke(User $user)
    {

        $tasks = TaskResource::collection(Task::all());

        $images = ImageResource::collection(Image::all());


        return inertia('Task/Index', [
            'tasks' => $tasks,
            'images' => $images,
            'hasAdmin' => auth()->user()->hasRole('admin'),
        ]);
    }
}
