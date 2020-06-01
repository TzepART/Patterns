<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * Add interface for coffee and simple class
 *
 * Interface CoffeeInterface
 */
interface CoffeeInterface
{
    /**
     * @return integer
     */
    public function getCost();

    /**
     * @return string
     */
    public function getFormattedCost();

    /**
     * @return string
     */
    public function getDescription();
}
