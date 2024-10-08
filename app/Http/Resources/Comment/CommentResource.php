<?php

namespace App\Http\Resources\Comment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        dd($this->created_at);
        return [
            'id' => $this->id,
            'content' => $this->content,
            'date' => $this->date,
            'user' => $this->user,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
