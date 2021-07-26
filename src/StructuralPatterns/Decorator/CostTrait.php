<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

/**
 * Trait CostTrait
 */
trait CostTrait
{
    public function getFormattedCost(): string
    {
        return 'Cost - ' . $this->getCost();
    }
}
