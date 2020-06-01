<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * Class SimpleCoffee
 */
class SimpleCoffee implements CoffeeInterface
{
    use CostTrait;

    /**
     * @return int
     */
    public function getCost()
    {
        return 10;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Simple coffee';
    }
}
