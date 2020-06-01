<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * Class VanillaCoffee
 */
class VanillaCoffee implements CoffeeInterface
{
    use CostTrait;

    /**
     * @var CoffeeInterface
     */
    protected $coffee;

    /**
     * VanillaCoffee constructor.
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
        return $this->coffee->getCost() + 3;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->coffee->getDescription() . ', vanilla';
    }
}
