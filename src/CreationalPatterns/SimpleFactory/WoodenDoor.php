<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

/**
 * Class WoodenDoor
 */
class WoodenDoor implements DoorInterface
{
    public function __construct(
        protected float $width,
        protected float $height
    ) {}

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}
