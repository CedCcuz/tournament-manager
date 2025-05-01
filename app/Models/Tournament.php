<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'name',
        'location',
        'type',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
