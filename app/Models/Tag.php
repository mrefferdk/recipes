<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'is_public',
    ];

    public function recipes() : HasMany
    {
        $this->belongsToMany(Recipe::class);
    }
}
