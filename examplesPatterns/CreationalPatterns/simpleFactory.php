<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 13/07/2018
 * Time: 13:19
 */

namespace Patterns\CreationalPatterns\SimpleFactory;

/*
 * Simple Factory
 * Вкратце
 * Простая фабрика просто генерирует экземпляр для клиента без предоставления какой-либо логики экземпляра.
 *
 * Когда использовать?
 * Когда создание объекта подразумевает какую-то логику, а не просто несколько присваиваний,
 * то имеет смысл делегировать задачу выделенной фабрике, а не повторять повсюду один и тот же код.
 * */

/**
 * Interface Door
 */
interface Door
{
    /**
     * @return float
     */
    public function getWidth(): float;

    /**
     * @return float
     */
    public function getHeight(): float;
}

/**
 * Class WoodenDoor
 */
class WoodenDoor implements Door
{
    /**
     * @var float
     */
    protected $width;
    /**
     * @var float
     */
    protected $height;

    /**
     * WoodenDoor constructor.
     * @param float $width
     * @param float $height
     */
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }
}

// Add Factory for creating and returns doors

/**
 * Class DoorFactory
 */
class DoorFactory
{
    /**
     * @param $width
     * @param $height
     * @return Door
     */
    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}


/**
 * Interface House
 */
interface House{
    /**
     * @return mixed
     */
    public function getCountDoors();

    /**
     * @return mixed
     */
    public function getCountWindows();
}

/**
 * Class WoodHouse
 */
class WoodHouse implements House{

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

class HouseFactory{

    public static function makeHouse(int $countDoors = 0, int $countWindows = 0)
    {
        return new WoodHouse($countDoors,$countWindows);
    }
}

//Using DoorFactory
$door = DoorFactory::makeDoor(100, 200);
echo 'Width: ' . $door->getWidth();
echo 'Height: ' . $door->getHeight();

//Using HouseFactory
$door = HouseFactory::makeHouse(4, 6);
echo 'Count doors: ' . $door->getCountDoors();
echo 'Count windows: ' . $door->getCountWindows();
