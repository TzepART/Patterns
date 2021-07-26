<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Strategy;

/**
 * Class Sorter
 * @package Patterns\BehavioralPatterns\Strategy
 */
class Sorter
{
    public function __construct(private SortStrategyInterface $sorter)
    {}

    public function sort(array $dataSet): array
    {
        return $this->sorter->sort($dataSet);
    }
}
