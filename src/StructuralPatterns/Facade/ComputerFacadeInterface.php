<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Facade;

/**
 * FacadeInterface
 * @package Patterns\StructuralPatterns\Facade
 */
interface ComputerFacadeInterface
{
    public function turnOn();
    public function turnOff();
}