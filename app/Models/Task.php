<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $table = 'tasks';
    protected $casts = [
        'is_completed' => 'boolean',
    ];

    protected $fillable = [
        'title',
        'description',
        'is_completed',
        'due_date',
        'list_id'
    ];

    public function list(): BelongsTo
    {
        return $this->belongsTo(TaskList::class, 'list_id');
    }
}
