<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{

    protected $fillable = [
        'path', 'url', 'task_id'
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
}
