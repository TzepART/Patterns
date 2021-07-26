<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * Add interface for coffee and simple class
 * Interface CoffeeInterface
 */
interface CoffeeInterface
{
    public function getCost(): int;
    public function getFormattedCost(): string;
    public function getDescription(): string;
}
