<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_group_id',
        'title',
        'description',
        'status',
        'due_date',
        'priority',
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function projectGroup(): BelongsTo
    {
        return $this->belongsTo(ProjectGroup::class);
    }
}
