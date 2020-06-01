<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

/**
 * Class LowerCase
 * @package Patterns\BehavioralPatterns\State
 */
class LowerCase implements WritingStateInterface
{
    /**
     * @param string $words
     * @return mixed|void
     */
    public function write(string $words)
    {
        echo strtolower($words) . PHP_EOL;
    }
}
