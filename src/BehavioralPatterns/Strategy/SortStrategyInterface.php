<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Strategy;

/**
 * Interface SortStrategy
 * @package Patterns\BehavioralPatterns\Strategy
 */
interface SortStrategyInterface
{
    /**
     * @param array $dataSet
     * @return array
     */
    public function sort(array $dataSet): array;
}
