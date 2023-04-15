<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'user_id',
        ];

    /**
     * @return HasMany
     */
    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class, 'recipe_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id');
    }

    public function scopeForUser($query)
    {
        // TODO add column "for_all" to make globally visible recipes
        return $query->select(['recipes.id as recipeid', 'title', 'body', 'number', 'image_path'])->where(function ($query) {
            $query->where('user_id', auth()->user()?->id)
                ->orWhere('user_id', '=', null)
            ;
        });
    }

    public function scopeTag($query, $tagId = null)
    {
        if ($tagId) {
            return $query->where('recipe_tag.tag_id', $tagId)
                ->join('recipe_tag', 'recipe_tag.recipe_id', '=', 'recipes.id');
        }
        return $query;
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
