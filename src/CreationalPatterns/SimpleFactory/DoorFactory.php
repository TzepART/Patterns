<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

/**
 * Add Factory for creating and returns doors
 *
 * Class DoorFactory
 */
class DoorFactory
{
    /**
     * @param $width
     * @param $height
     * @return DoorInterface
     */
    public static function makeDoor($width, $height): DoorInterface
    {
        return new WoodenDoor($width, $height);
    }
}
