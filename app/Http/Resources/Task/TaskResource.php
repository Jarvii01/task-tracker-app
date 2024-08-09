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
            'title' => $this->tilte,
            'description' => $this->description,
            'deadline' => $this->deadline,
            'user_id' => auth()->id(),
            'area_id' => $this->area,
            'status' => $this->status,
            'images' => ImageResource::collection($this->images),
        ];
    }
}
