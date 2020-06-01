<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

/**
 * Class DefaultCase
 * @package Patterns\BehavioralPatterns\State
 */
class DefaultCase implements WritingStateInterface
{
    /**
     * @param string $words
     * @return mixed|void
     */
    public function write(string $words)
    {
        echo $words . PHP_EOL;
    }
}
