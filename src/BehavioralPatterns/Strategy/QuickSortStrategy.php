<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Strategy;

/**
 * Class QuickSortStrategy
 * @package Patterns\BehavioralPatterns\Strategy
 */
class QuickSortStrategy implements SortStrategyInterface
{
    public function sort(array $dataSet): array
    {
        echo 'Sorting using quick sort' . PHP_EOL;

        return $this->quickSort($dataSet);
    }

    protected function quickSort(array $dataSet): array
    {
        $loe = $gt = [];
        if (count($dataSet) < 2) {
            return $dataSet;
        }
        $pivot_key = key($dataSet);
        $pivot = array_shift($dataSet);

        foreach ($dataSet as $val) {
            if ($val <= $pivot) {
                $loe[] = $val;
            } elseif ($val > $pivot) {
                $gt[] = $val;
            }
        }
        return array_merge($this->quickSort($loe), [$pivot_key => $pivot], $this->quickSort($gt));
    }
}
