<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

use JetBrains\PhpStorm\Pure;

/**
 * Class HouseFactory
 * @package Patterns\CreationalPatterns\SimpleFactory
 */
class HouseFactory
{
    #[Pure]
    public static function makeHouse(int $countDoors = 0, int $countWindows = 0): HouseInterface
    {
        return new WoodHouse($countDoors, $countWindows);
    }
}
