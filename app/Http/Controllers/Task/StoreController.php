<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Http\Resources\Task\TaskResource;
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

        $images = $data['images'];

        $task = new TaskResource (Task::query()->create($data));
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
