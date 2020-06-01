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
        $door = DoorFactory::makeDoor(100, 200);
        echo 'Width: ' . $door->getWidth() . PHP_EOL;
        echo 'Height: ' . $door->getHeight() . PHP_EOL;

        /**
         * Using HouseFactory
         */
        $door = HouseFactory::makeHouse(4, 6);
        echo 'Count doors: ' . $door->getCountDoors() . PHP_EOL;
        echo 'Count windows: ' . $door->getCountWindows() . PHP_EOL;
    }
}
