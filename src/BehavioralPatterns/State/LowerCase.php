<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

/**
 * @package Patterns\BehavioralPatterns\State
 */
class LowerCase implements WritingStateInterface
{
    public function write(string $words): void
    {
        echo strtolower($words) . PHP_EOL;
    }
}
