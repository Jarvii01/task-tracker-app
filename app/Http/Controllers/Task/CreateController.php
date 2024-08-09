<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Task $task)
    {
        $users = User::all();

        $areas = Area::all();

        return inertia('Task/Create', compact('users', 'areas'));

    }
}
