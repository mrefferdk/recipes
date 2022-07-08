<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Ingredient;

class Recipe extends Model
{
    use HasFactory;

    const FILE_UPLOAD_PATH = 'uploads';

    protected $fillable = [
        'title',
        'image_path',
        'body',
        'active',
        'number',
        'cooking_time',
        'work_time',
        'ingredients',
        ];

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class, 'recipe_id');
    }


}
