<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Class IronDoor
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class IronDoor implements DoorInterface
{
    public function getDescription(): void
    {
        echo 'I am an iron door' . PHP_EOL;
    }
}
