<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

/**
 * @package Patterns\BehavioralPatterns\State
 */
class DefaultCase implements WritingStateInterface
{
    public function write(string $words): void
    {
        echo $words . PHP_EOL;
    }
}
