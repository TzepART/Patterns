<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

/**
 * Class UpperCase
 * @package Patterns\BehavioralPatterns\State
 */
class UpperCase implements WritingStateInterface
{
    /**
     * @param string $words
     * @return mixed|void
     */
    public function write(string $words)
    {
        echo strtoupper($words) . PHP_EOL;
    }
}
