<?php

namespace Harsh\WordGenerator\Commands;

use Illuminate\Console\Command;

class WordGeneratorCommand extends Command
{
    public $signature = 'word-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
