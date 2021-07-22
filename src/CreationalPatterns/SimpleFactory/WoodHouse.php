<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

/**
 * Class WoodHouse
 */
class WoodHouse implements HouseInterface
{
    public function __construct(
        private int $countDoors,
        private int $countWindows
    ){}

    public function getCountDoors(): int
    {
        return $this->countDoors;
    }

    public function setCountDoors(int $countDoors): self
    {
        $this->countDoors = $countDoors;
        return $this;
    }

    public function getCountWindows(): int
    {
        return $this->countWindows;
    }

    public function setCountWindows(int $countWindows): self
    {
        $this->countWindows = $countWindows;
        return $this;
    }
}
