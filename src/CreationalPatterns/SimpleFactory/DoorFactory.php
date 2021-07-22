<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

use JetBrains\PhpStorm\Pure;

/**
 * Factory for creating and returns doors
 * Class DoorFactory
 */
class DoorFactory
{
    #[Pure]
    public static function makeDoor(float $width, float $height): DoorInterface
    {
        return new WoodenDoor($width, $height);
    }
}
