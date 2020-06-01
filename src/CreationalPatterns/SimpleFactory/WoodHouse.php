<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

/**
 * Class WoodHouse
 */
class WoodHouse implements HouseInterface
{
    /**
     * @var int
     */
    private $countDoors;
    /**
     * @var int
     */
    private $countWindows;

    /**
     * WoodHouse constructor.
     * @param int $countDoors
     * @param int $countWindows
     */
    public function __construct(int $countDoors, int $countWindows)
    {
        $this->countDoors = $countDoors;
        $this->countWindows = $countWindows;
    }

    /**
     * @return int
     */
    public function getCountDoors(): int
    {
        return $this->countDoors;
    }

    /**
     * @param int $countDoors
     * @return $this
     */
    public function setCountDoors(int $countDoors)
    {
        $this->countDoors = $countDoors;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountWindows(): int
    {
        return $this->countWindows;
    }

    /**
     * @param int $countWindows
     * @return $this
     */
    public function setCountWindows(int $countWindows)
    {
        $this->countWindows = $countWindows;
        return $this;
    }

}
