<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Image;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Task $task)
    {

        $areas = Area::all();

        $users = User::all();

        $images = $task->image()->get();

//        dd($images);
        return inertia('Task/Edit',
            compact('task', 'users', 'areas', 'images') );
    }
}
