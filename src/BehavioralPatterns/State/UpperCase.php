<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

/**
 * Class UpperCase
 * @package Patterns\BehavioralPatterns\State
 */
class UpperCase implements WritingStateInterface
{
    public function write(string $words): void
    {
        echo strtoupper($words) . PHP_EOL;
    }
}
