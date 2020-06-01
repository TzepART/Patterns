<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Interface DoorFittingExpertInterface
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
interface DoorFittingExpertInterface
{
    /**
     * @return mixed
     */
    public function getDescription();
}
