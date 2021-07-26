<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * Class SimpleCoffee
 */
class SimpleCoffee implements CoffeeInterface
{
    use CostTrait;

    public function getCost(): int
    {
        return 10;
    }

    public function getDescription(): string
    {
        return 'Simple coffee';
    }
}
