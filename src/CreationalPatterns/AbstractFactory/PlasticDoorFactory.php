<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Factory for creating plastic door and master by plastic door
 *
 * Class PlasticDoorFactory
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class PlasticDoorFactory implements DoorAbstractFactoryInterface
{
    /**
     * @return DoorInterface
     */
    public function makeDoor(): DoorInterface
    {
        return new PlasticDoor();
    }

    /**
     * @return DoorFittingExpertInterface
     */
    public function makeFittingExpert(): DoorFittingExpertInterface
    {
        return new PlasticMaster();
    }
}
