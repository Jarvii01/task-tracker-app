<?php

namespace App\Http\Resources\Task;

use App\Http\Resources\Image\ImageResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'deadline' => $this->deadline,
            'user_id' => $this->user,
            'area_id' => $this->area,
            'status' => $this->status_item,
            'images' => new ImageResource($this->images),
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
