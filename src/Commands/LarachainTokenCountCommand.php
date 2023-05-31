<?php

namespace SundanceSolutions\LarachainTokenCount\Commands;

use Illuminate\Console\Command;

class LarachainTokenCountCommand extends Command
{
    public $signature = 'larachain-token-count';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
