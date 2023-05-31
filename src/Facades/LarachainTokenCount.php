<?php

namespace SundanceSolutions\LarachainTokenCount\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SundanceSolutions\LarachainTokenCount\LarachainTokenCount
 */
class LarachainTokenCount extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SundanceSolutions\LarachainTokenCount\LarachainTokenCount::class;
    }
}
