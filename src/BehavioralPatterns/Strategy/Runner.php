<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Strategy;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        //Create example for sorting
        $dataSet = [1, 5, 4, 3, 2, 8, 1, 1, 5, 4, 3, 2, 8, 1, 1, 5, 4, 3, 2, 8, 1];

        if (count($dataSet) > 10) {
            $sorter = new Sorter(new QuickSortStrategy());
        } else {
            $sorter = new Sorter(new BubbleSortStrategy());
        }

        $result = $sorter->sort($dataSet);
        echo implode(',', $result).PHP_EOL;
    }
}
