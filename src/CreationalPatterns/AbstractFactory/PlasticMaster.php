<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Class PlasticMaster
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class PlasticMaster implements DoorFittingExpertInterface
{
    /**
     * @return mixed|void
     */
    public function getDescription()
    {
        echo 'I can only plastic wooden doors' . PHP_EOL;
    }
}
