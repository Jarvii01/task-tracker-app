<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{

    use HasFactory;

    protected $fillable = [
        'title', 'description', 'deadline', 'user_id', 'area_id',
    ];

    protected $with = ['user'];

    protected $casts = [
        'deadline' => 'datetime',
    ];

    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class);

    }

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function image(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
