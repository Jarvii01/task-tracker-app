<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Models\Area;
use App\Models\Image;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, User $user, Task $task)
    {

        $data = $request->validated();
        $user = $task;
        dd($user);


        $user = User::find(3);
        $area = Area::find(1);
        $data['user_id'] = $user->id;
        $data['area_id'] = $area->id;

        $images = $data['images'];

        dd($data);

        $task = Task::query()->create($data);

        foreach ($images as $image) {
            $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
            $filePath = Storage::disk('public')->putFileAs('/images', $image, $name);

            Image::query()->create([
                'path' => $filePath,
                'url' => url('/storage/' . $filePath),
                'task_id' => $task->id,
            ]);
        }


        return to_route('tasks.index');
    }

}
