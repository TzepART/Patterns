<?php

declare(strict_types=1);

namespace Patterns\StructuralPatterns\Facade;

/**
 * Class ComputerInterface
 * @package Patterns\StructuralPatterns\Facade
 */
interface ComputerInterface
{
    public function getElectricShock(): void;
    public function makeSound(): void;
    public function showLoadingScreen(): void;
    public function bam(): void;
    public function closeEverything(): void;
    public function sooth(): void;
    public function pullCurrent(): void;
}