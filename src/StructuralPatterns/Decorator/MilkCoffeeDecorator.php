<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * You can make the code extensible so that you can make modifications if necessary. Add "decorators":
 *
 * Class MilkCoffee
 */
class MilkCoffeeDecorator implements CoffeeInterface
{
    use CostTrait;

    /**
     * MilkCoffee constructor.
     */
    public function __construct(private CoffeeInterface $coffee)
    {
    }

    public function getCost(): int
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', milk';
    }
}
