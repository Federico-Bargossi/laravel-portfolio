<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class technology extends Model
{
    public function projects() {
        return $this->belongsToMany(Project::class);
    }
}
