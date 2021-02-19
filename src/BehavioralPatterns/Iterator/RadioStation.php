<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Iterator;

/**
 * Class RadioStation
 * @package Patterns\BehavioralPatterns\Iterator
 */
class RadioStation
{
    /**
     * @var float
     */
    protected $frequency;

    /**
     * RadioStation constructor.
     * @param float $frequency
     */
    public function __construct(float $frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return float
     */
    public function getFrequency(): float
    {
        return $this->frequency;
    }
}
