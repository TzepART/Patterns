<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Class Welder
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class Welder implements DoorFittingExpertInterface
{
    /**
     * @return mixed|void
     */
    public function getDescription()
    {
        echo 'I can only fit iron doors' . PHP_EOL;
    }
}
