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
    /**
     * @var RadioStationInterface[]
     */
    protected array $stations = [];
    protected int $counter;

    public function addStation(RadioStationInterface $station)
    {
        $this->stations[] = $station;
    }

    public function removeStation(RadioStationInterface $toRemove): void
    {
        $toRemoveFrequency = $toRemove->getFrequency();
        $this->stations = array_filter(
            $this->stations,
            function (RadioStation $station) use ($toRemoveFrequency) {
                return $station->getFrequency() !== $toRemoveFrequency;
            });
    }

    public function count(): int
    {
        return count($this->stations);
    }

    public function current(): RadioStationInterface
    {
        return $this->stations[$this->counter];
    }

    public function key(): int
    {
        return $this->counter;
    }

    public function next(): void
    {
        $this->counter++;
    }

    public function rewind(): void
    {
        $this->counter = 0;
    }

    public function valid(): bool
    {
        return isset($this->stations[$this->counter]);
    }
}
