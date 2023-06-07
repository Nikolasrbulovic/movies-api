<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function scopeSearchByTitle($query, $title)
    {
        return $query->where('title', 'like', "%$title%")->get();
    }
}
