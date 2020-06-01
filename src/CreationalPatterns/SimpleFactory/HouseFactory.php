<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

/**
 * Class HouseFactory
 * @package Patterns\CreationalPatterns\SimpleFactory
 */
class HouseFactory
{
    /**
     * @param int $countDoors
     * @param int $countWindows
     * @return WoodHouse
     */
    public static function makeHouse(int $countDoors = 0, int $countWindows = 0)
    {
        return new WoodHouse($countDoors, $countWindows);
    }
}
