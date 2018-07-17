<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 18/07/2018
 * Time: 01:37
 */

namespace Patterns\BehavioralPatterns\Iterator;

use Countable;
use Iterator;

/*
 * Вкратце
 * Шаблон — это способ доступа к элементам объекта без раскрытия базового представления.
 * Или
 * В этом шаблоне итератор используется для перемещения по контейнеру и обеспечения доступа к
 * элементам контейнера. Шаблон подразумевает отделение алгоритмов от контейнера. В каких-то случаях
 * алгоритмы, специфичные для этого контейнера, не могут быть отделены.
 */



//Example
//Step 1. Add RadioStation
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

//Step 2. Add Iterator
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

    /**
     *
     */
    public function next()
    {
        $this->counter++;
    }

    /**
     *
     */
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


//Using
$stationList = new StationList();

$stationList->addStation(new RadioStation(89));
$stationList->addStation(new RadioStation(101));
$stationList->addStation(new RadioStation(102));
$stationList->addStation(new RadioStation(103.2));

foreach($stationList as $station) {
    echo $station->getFrequency() . PHP_EOL;
}

$stationList->removeStation(new RadioStation(89)); // Will remove station 89