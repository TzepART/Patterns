<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

/**
 * @description First, we make the state interface and states
 * @package Patterns\BehavioralPatterns\State
 */
interface WritingStateInterface
{
    public function write(string $words): void;
}
