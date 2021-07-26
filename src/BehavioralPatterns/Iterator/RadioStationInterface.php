<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Iterator;

/**
 * @package Patterns\BehavioralPatterns\Iterator
 */
interface RadioStationInterface
{
    public function getFrequency(): float;
    public function getName(): string;
}