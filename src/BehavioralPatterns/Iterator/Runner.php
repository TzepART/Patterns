<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Iterator;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $stationList = new StationList();

        $freedomStation = new RadioStation('Freedom', 89);

        $stationList->addStation($freedomStation);
        $stationList->addStation(new RadioStation('Nashe',101));
        $stationList->addStation(new RadioStation('Europe',102));
        $stationList->addStation(new RadioStation('Hero',103.2));

        foreach ($stationList as $station) {
            echo sprintf('%s - %d', $station->getName(), $station->getFrequency()) . PHP_EOL;
        }

        echo 'Count before remove - '.$stationList->count() . PHP_EOL;

        $stationList->removeStation($freedomStation); // Will remove station 89

        echo 'Count after remove - '.$stationList->count() . PHP_EOL;
    }
}
