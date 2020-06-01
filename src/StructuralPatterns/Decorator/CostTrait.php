<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * Trait CostTrait
 */
trait CostTrait
{
    /**
     * @return string
     */
    public function getFormattedCost()
    {
        return "Cost - " . $this->getCost();
    }
}
