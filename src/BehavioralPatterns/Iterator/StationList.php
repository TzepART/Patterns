<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Iterator;

use Countable;
use Iterator;

/**
 * Class StationList
 * @package Patterns\BehavioralPatterns\Iterator
 */
class StationList implements Countable, Iterator
{
    /** @var RadioStation[] $stations */
    protected $stations = [];

    /** @var int $counter */
    protected $counter;

    /**
     * @param RadioStation $station
     */
    public function addStation(RadioStation $station)
    {
        $this->stations[] = $station;
    }

    /**
     * @param RadioStation $toRemove
     */
    public function removeStation(RadioStation $toRemove)
    {
        $toRemoveFrequency = $toRemove->getFrequency();
        $this->stations = array_filter($this->stations, function (RadioStation $station) use ($toRemoveFrequency) {
            return $station->getFrequency() !== $toRemoveFrequency;
        });
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->stations);
    }

    /**
     * @return RadioStation
     */
    public function current(): RadioStation
    {
        return $this->stations[$this->counter];
    }

    /**
     * @return int|mixed
     */
    public function key()
    {
        return $this->counter;
    }

    public function next()
    {
        $this->counter++;
    }

    public function rewind()
    {
        $this->counter = 0;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->stations[$this->counter]);
    }
}
