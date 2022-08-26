<?php

namespace Tests\Unit\Adapters\Nemligcom;

use App\Http\Adapters\Nemligcom\RecipeAdapter;
use PHPUnit\Framework\TestCase;

class RecipeAdapterTest extends TestCase
{
    /**
     * @param string $timeString
     * @param string $expected
     * @dataProvider dataProviderTimeString
     */
    public function testExtractTimeString(string $timeString, string $expected)
    {
        $this->assertEquals($expected, RecipeAdapter::extractTimeFromString($timeString));
    }

    public function dataProviderTimeString(): \Generator
    {
        yield 'test range' => [
            'data' => '10-20 min',
            'expected' => '20',
        ];

        yield 'test single' => [
            'data' => '10 min',
            'expected' => '10',
        ];
    }

    /**
     * @param array $data
     * @param array $expected
     * @dataProvider dataProviderAdapt
     */
    public function testAdapt(array $data, array $expected)
    {
        $adapted = RecipeAdapter::adapt($data);
        $this->assertEquals($expected['title'], $adapted->title);
        $this->assertEquals($expected['image_path'], $adapted->image_path);
        $this->assertEquals($expected['body'], $adapted->body);
        $this->assertEquals($expected['number'], $adapted->number);
        $this->assertEquals($expected['work_time'], $adapted->work_time);
        $this->assertEquals($expected['cooking_time'], $adapted->cooking_time);
    }

    public function dataProviderAdapt(): \Generator
    {
        yield 'sample 1' => [
            'data' => [
                'title' => 'Title',
                'imageSrc' => 'http://someurl.dk',
                'description' => 'Description',
                'persons' => '10',
                'instructions' => 'Instructions',
                'workTime' => '20 min',
                'totalTime' => '100 min',
            ],
            'expected' => [
                'title' => 'Title',
                'image_path' => 'http://someurl.dk',
                'body' => 'Instructions',
                'active' => 0,
                'number' => 10,
                'cooking_time' => 80,
                'work_time' => 20,
            ],
        ];

        yield 'sample 2 with supported null values' => [
            'data' => [
                'title' => 'Title',
                'description' => 'Description',
                'instructions' => 'Instructions',
            ],
            'expected' => [
                'title' => 'Title',
                'image_path' => null,
                'body' => 'Instructions',
                'active' => 0,
                'number' => null,
                'cooking_time' => null,
                'work_time' => null,
            ],
        ];
    }
}
