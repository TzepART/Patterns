<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * Class WhipCoffee
 */
class WhipCoffeeDecorator implements CoffeeInterface
{
    use CostTrait;

    /**
     * WhipCoffee constructor.
     */
    public function __construct(private CoffeeInterface $coffee)
    {
    }

    public function getCost(): int
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', whip';
    }
}
