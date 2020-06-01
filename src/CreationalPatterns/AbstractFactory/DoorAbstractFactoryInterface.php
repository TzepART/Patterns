<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Abstract Factory
 *
 * Interface DoorAbstractFactoryInterface
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
interface DoorAbstractFactoryInterface
{
    /**
     * @return DoorInterface
     */
    public function makeDoor(): DoorInterface;

    /**
     * @return DoorFittingExpertInterface
     */
    public function makeFittingExpert(): DoorFittingExpertInterface;
}
