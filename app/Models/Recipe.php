<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recipe extends Model
{
    use HasFactory;

    const FILE_UPLOAD_PATH = 'uploads';

    protected ?array $ingredients;

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

    /**
     * @return HasMany
     */
    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class, 'recipe_id');
    }
}
