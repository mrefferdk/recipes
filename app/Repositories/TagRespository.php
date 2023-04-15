<?php

namespace App\Repositories;

use App\Models\Tag;

class TagRespository
{
    public function getTagsForMainNavigation()
    {
        return Tag::Where('type', '=', 'top-category')->where('is_public', '=', true)->orderBy('order')->get();
    }
}
