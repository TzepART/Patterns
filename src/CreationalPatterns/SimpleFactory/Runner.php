<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * Using DoorFactory
         */
        $door = DoorFactory::makeDoor(width: 100, height: 200);
        echo 'Width: ' . $door->getWidth() . PHP_EOL;
        echo 'Height: ' . $door->getHeight() . PHP_EOL;

        /**
         * Using HouseFactory
         */
        $house = HouseFactory::makeHouse(countDoors: 4, countWindows: 6);
        echo 'Count doors: ' . $house->getCountDoors() . PHP_EOL;
        echo 'Count windows: ' . $house->getCountWindows() . PHP_EOL;
    }
}
