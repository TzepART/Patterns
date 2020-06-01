<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * You can make the code extensible so that you can make modifications if necessary. Add "decorators":
 *
 * Class MilkCoffee
 */
class MilkCoffee implements CoffeeInterface
{
    use CostTrait;

    /**
     * @var CoffeeInterface
     */
    protected $coffee;

    /**
     * MilkCoffee constructor.
     * @param CoffeeInterface $coffee
     */
    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->coffee->getCost() + 2;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->coffee->getDescription() . ', milk';
    }
}
