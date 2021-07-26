<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * Class VanillaCoffee
 */
class VanillaCoffeeDecorator implements CoffeeInterface
{
    use CostTrait;

    /**
     * VanillaCoffee constructor.
     */
    public function __construct(private CoffeeInterface $coffee)
    {
    }

    public function getCost(): int
    {
        return $this->coffee->getCost() + 3;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', vanilla';
    }
}
