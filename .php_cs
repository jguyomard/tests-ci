<?php

use Symfony\CS\Config\Config;
use Symfony\CS\FixerInterface;
use Symfony\CS\Finder\DefaultFinder;

$excludes = [
    'vendor'
];

$fixers = [
    'concat_without_spaces',
    'spaces_cast',
    'unalign_double_arrow',
];

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude($excludes)
    ->in(__DIR__);

return Config::create()
    ->finder($finder)
    ->fixers($fixers)
    ->level(FixerInterface::PSR2_LEVEL)
    ->setUsingCache(true);
