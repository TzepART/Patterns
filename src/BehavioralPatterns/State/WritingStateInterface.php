<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

//Step 1. First, we make the state interface and states:

/**
 * Interface WritingState
 * @package Patterns\BehavioralPatterns\State
 */
interface WritingStateInterface
{
    /**
     * @param string $words
     * @return mixed
     */
    public function write(string $words);
}
