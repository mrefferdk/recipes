<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['id' => 1, 'title' => 'Tag 1 - top category', 'type' => 'top-category', 'order' => 1, 'is_public' => true],
            ['id' => 2, 'title' => 'Tag 2 - top category', 'type' => 'top-category', 'order' => 2, 'is_public' => true],
            ['id' => 3, 'title' => 'Tag 3 - category', 'type' => 'category', 'order' => 1],
            ['id' => 4, 'title' => 'Tag 4 - category', 'type' => 'category', 'order' => 2],
            ['id' => 5, 'title' => 'Tag 5 - category', 'type' => 'category', 'order' => 3],
            ['id' => 6, 'title' => 'Tag 6 - category', 'type' => 'category', 'order' => 4],
        ];

        foreach ($tags as $tag) {
            Tag::updateOrCreate(['id' => $tag['id']], $tag);
        }
    }
}
