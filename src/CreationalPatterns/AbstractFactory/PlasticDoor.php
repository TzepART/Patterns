<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Class PlasticDoor
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class PlasticDoor implements DoorInterface
{
    public function getDescription(): void
    {
        echo 'I am a plastic door' . PHP_EOL;
    }
}
