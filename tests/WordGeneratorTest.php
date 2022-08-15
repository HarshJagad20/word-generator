<?php

use Harsh\WordGenerator\WordGenerator;

test('get nouns', function () {
    $count = 5;
    $response = new WordGenerator();
    $response = $response->nouns($count);
    $this->assertCount($count, $response['nouns']);
});

test('get adjectives', function () {
    $count = 5;
    $response = new WordGenerator();
    $response = $response->adjectives($count);
    $this->assertCount($count, $response['adjectives']);
});

test('get verbs', function () {
    $count = 5;
    $response = new WordGenerator();
    $response = $response->verbs($count);
    $this->assertCount($count, $response['verbs']);
});

test('get all words', function () {
    $count = 5;
    $response = new WordGenerator();
    $response = $response->all($count);

    foreach ($response['all'] as $value) {
        $this->assertCount($count, $value);
    }
});
