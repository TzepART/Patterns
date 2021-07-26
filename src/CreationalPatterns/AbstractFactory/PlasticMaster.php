<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Class PlasticMaster
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class PlasticMaster implements DoorFittingExpertInterface
{
    public function getDescription(): void
    {
        echo 'I can only plastic wooden doors' . PHP_EOL;
    }
}
