<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Factory for creating iron door and master by iron door
 *
 * Class IronDoorFactory
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class IronDoorFactory implements DoorAbstractFactoryInterface
{
    /**
     * @return DoorInterface
     */
    public function makeDoor(): DoorInterface
    {
        return new IronDoor();
    }

    /**
     * @return DoorFittingExpertInterface
     */
    public function makeFittingExpert(): DoorFittingExpertInterface
    {
        return new Welder();
    }
}
