<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

/**
 * Interface DoorInterface
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
interface DoorInterface
{
    /**
     * @return mixed
     */
    public function getDescription();
}

