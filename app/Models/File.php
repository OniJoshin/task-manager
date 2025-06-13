<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_group_id',
        'filename',
        'path',
        'type',
    ];

    public function projectGroup(): BelongsTo
    {
        return $this->belongsTo(ProjectGroup::class);
    }
}
