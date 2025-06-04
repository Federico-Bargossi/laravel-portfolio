<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // colleghiamo i post

    public function projects() {
    return $this->hasMany(project::class);
    }
}
