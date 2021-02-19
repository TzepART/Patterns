<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Iterator;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $stationList = new StationList();

        $stationList->addStation(new RadioStation(89));
        $stationList->addStation(new RadioStation(101));
        $stationList->addStation(new RadioStation(102));
        $stationList->addStation(new RadioStation(103.2));

        foreach ($stationList as $station) {
            echo $station->getFrequency() . PHP_EOL;
        }

        echo 'Count before remove - '.$stationList->count() . PHP_EOL;
        $stationList->removeStation(new RadioStation(89)); // Will remove station 89
        echo 'Count after remove - '.$stationList->count() . PHP_EOL;
    }
}
