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
        $tagId = 1; // TODO hvordan får jeg denne parameter med??
        // TODO add column "for_all" to make globally visible recipes
        /*dump(Recipe::where('user_id', auth()->user()?->id)->orWhere('user_id', '=', null)->whereHas('tags', function($q) use ($tagId) {
            $q->where('tag_id', $tagId);
        })->toSql());*/
        return $query->where('recipe_tag.tag_id', 2)->where(function($query) {
            $query->where('user_id', auth()->user()?->id)
                ->orWhere('user_id', '=', null)
            ;
        })
            ->join('recipe_tag', 'recipe_tag.recipe_id', '=', 'recipes.id')->dd();
        return $query->where('recipe_tag.tag_id', 2)->where('user_id', auth()->user()?->id)->orWhere('user_id', '=', null)->join('recipe_tag', 'recipe_tag.recipe_id', '=', 'recipes.id')->dd();


    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
