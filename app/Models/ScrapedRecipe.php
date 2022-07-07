<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Ingredient;

class ScrapedRecipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'url',
        ];

    public function recipe()
    {
        return $this->hasOne(Recipe::class, 'id');
    }


}
