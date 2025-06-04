<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'author',
        'content',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function technologies() {
        return $this->belongsToMany(Technology::class);
    }
}
