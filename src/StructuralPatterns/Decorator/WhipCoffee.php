<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * Class WhipCoffee
 */
class WhipCoffee implements CoffeeInterface
{
    use CostTrait;

    /**
     * @var CoffeeInterface
     */
    protected $coffee;

    /**
     * WhipCoffee constructor.
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
        return $this->coffee->getCost() + 5;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->coffee->getDescription() . ', whip';
    }
}
