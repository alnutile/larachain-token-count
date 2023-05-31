<?php

use SundanceSolutions\LarachainTokenCount\Facades\LarachainTokenCount;

it('can count tokens', function () {
    $text = "Your document text...";
    $results = LarachainTokenCount::count($text);
    expect($results)->toEqual(8);
});
