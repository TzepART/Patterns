<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Class Welder
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class Welder implements DoorFittingExpertInterface
{
    public function getDescription(): void
    {
        echo 'I can only fit iron doors' . PHP_EOL;
    }
}
