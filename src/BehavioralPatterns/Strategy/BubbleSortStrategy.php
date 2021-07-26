<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Strategy;

/**
 * Class BubbleSortStrategy
 * @package Patterns\BehavioralPatterns\Strategy
 */
class BubbleSortStrategy implements SortStrategyInterface
{
    public function sort(array $dataSet): array
    {
        echo 'Sorting using bubble sort' . PHP_EOL;

        usort($dataSet, function ($a, $b) {
            return $a <=> $b;
        });

        return $dataSet;
    }
}
