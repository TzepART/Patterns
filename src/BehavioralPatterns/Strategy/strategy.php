<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 16/07/2018
 * Time: 15:11
 */

namespace Patterns\BehavioralPatterns\Strategy;

/*
 * Вкратце
 * Шаблон «Стратегия» позволяет переключаться между алгоритмами или стратегиями в зависимости от ситуации.
 * Или
 * Шаблон «Стратегия» позволяет при выполнении выбирать поведение алгоритма.
 */

//Create example for sorting
//Step 1. Create SortStrategy Interface and classes of sorting
/**
 * Interface SortStrategy
 * @package Patterns\BehavioralPatterns\Strategy
 */
interface SortStrategy
{
    /**
     * @param array $dataSet
     * @return array
     */
    public function sort(array $dataSet): array;
}

/**
 * Class BubbleSortStrategy
 * @package Patterns\BehavioralPatterns\Strategy
 */
class BubbleSortStrategy implements SortStrategy
{
    /**
     * @param array $dataSet
     * @return array
     */
    public function sort(array $dataSet): array
    {
        echo "Sorting using bubble sort";
        echo "\n";

        function cmp($a, $b) {
            return $a <=> $b;
        }

        usort($dataSet,'cmp');

        return $dataSet;
    }
}

/**
 * Class QuickSortStrategy
 * @package Patterns\BehavioralPatterns\Strategy
 */
class QuickSortStrategy implements SortStrategy
{
    /**
     * @param array $dataSet
     * @return array
     */
    public function sort(array $dataSet): array
    {
        echo "Sorting using quick sort";
        echo "\n";

        $dataSet = $this->quickSort($dataSet);

        // Do sorting
        return $dataSet;
    }

    /**
     * @param array $dataSet
     * @return array
     */
    protected function quickSort(array $dataSet)
    {
        $loe = $gt = array();
        if(count($dataSet) < 2)
        {
            return $dataSet;
        }
        $pivot_key = key($dataSet);
        $pivot = array_shift($dataSet);
        foreach($dataSet as $val)
        {
            if($val <= $pivot)
            {
                $loe[] = $val;
            }elseif ($val > $pivot)
            {
                $gt[] = $val;
            }
        }
        return array_merge($this->quickSort($loe),array($pivot_key=>$pivot),$this->quickSort($gt));
    }
}

//Step 2. Now create client, that is using our strategy
/**
 * Class Sorter
 * @package Patterns\BehavioralPatterns\Strategy
 */
class Sorter
{
    /**
     * @var SortStrategy
     */
    protected $sorter;

    /**
     * Sorter constructor.
     * @param SortStrategy $sorter
     */
    public function __construct(SortStrategy $sorter)
    {
        $this->sorter = $sorter;
    }

    /**
     * @param array $dataSet
     * @return array
     */
    public function sort(array $dataSet): array
    {
        return $this->sorter->sort($dataSet);
    }
}

//Step 3. Using
$dataSet = [1, 5, 4, 3, 2, 8, 1, 1, 5, 4, 3, 2, 8, 1, 1, 5, 4, 3, 2, 8, 1];

if(count($dataSet) > 10){
    $sorter = new Sorter(new QuickSortStrategy());
}else{
    $sorter = new Sorter(new BubbleSortStrategy());
}

$result = $sorter->sort($dataSet);
echo implode(',',$result);
echo "\n";

