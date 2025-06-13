<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $fillable = ['name', 'contact_info', 'notes'];

    public function projectGroups(): HasMany
    {
        return $this->hasMany(ProjectGroup::class);
    }
}
