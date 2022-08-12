<?php

namespace Harsh\WordGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Harsh\WordGenerator\WordGenerator
 */
class WordGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Harsh\WordGenerator\WordGenerator::class;
    }
}
