<?php

namespace Harsh\WordGenerator;

use Illuminate\Support\Arr;

class WordGenerator
{
    public function all($count = null)
    {
        $count = $count ?? 5;

        return [
            'all' => [
                'nouns' => Arr::random(config('word-generator.nouns'), $count),
                'verbs' => Arr::random(config('word-generator.verbs'), $count),
                'adjectives' => Arr::random(config('word-generator.adjectives'), $count),
            ],
        ];
    }

    public function nouns($count = null)
    {
        $count = $count ?? 5;
        $array = config('word-generator.nouns');
        $response = Arr::random($array, $count);

        return ['nouns' => $response];
    }

    public function verbs($count = null)
    {
        $count = $count ?? 5;

        $array = config('word-generator.verbs');
        $response = Arr::random($array, $count);

        return ['verbs' => $response];
    }

    public function adjectives($count = null)
    {
        $count = $count ?? 5;

        $array = config('word-generator.adjectives');
        $response = Arr::random($array, $count);

        return ['adjectives' => $response];
    }
}
