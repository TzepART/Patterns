<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Iterator;

/**
 * Class RadioStation
 * @package Patterns\BehavioralPatterns\Iterator
 */
class RadioStation implements RadioStationInterface
{
    public function __construct(private string $name, private float $frequency)
    {}

    public function getFrequency(): float
    {
        return $this->frequency;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
