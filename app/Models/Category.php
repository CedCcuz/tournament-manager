<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'tournament_id',
        'name',
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
