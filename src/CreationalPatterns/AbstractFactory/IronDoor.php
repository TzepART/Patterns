<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Class IronDoor
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class IronDoor implements DoorInterface
{
    /**
     * @return mixed|void
     */
    public function getDescription()
    {
        echo 'I am an iron door' . PHP_EOL;
    }
}
