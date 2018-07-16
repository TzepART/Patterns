<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 16/07/2018
 * Time: 15:11
 */

/*
 * Вкратце
 * Шаблон «Стратегия» позволяет переключаться между алгоритмами или стратегиями в зависимости от ситуации.
 * Или
 * Шаблон «Стратегия» позволяет при выполнении выбирать поведение алгоритма.
 */

//create example for sorting
//Step 1. Create SortStrategy Interface and classes of sorting
interface SortStrategy
{
    public function sort(array $dataSet): array;
}

class BubbleSortStrategy implements SortStrategy
{
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

class QuickSortStrategy implements SortStrategy
{
    public function sort(array $dataSet): array
    {
        echo "Sorting using quick sort";
        echo "\n";

        $dataSet = $this->quickSort($dataSet);

        // Do sorting
        return $dataSet;
    }

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

//Now create client, that is using our strategy
class Sorter
{
    protected $sorter;

    public function __construct(SortStrategy $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataSet): array
    {
        return $this->sorter->sort($dataSet);
    }
}

//Using
$dataSet = [1, 5, 4, 3, 2, 8, 1, 1, 5, 4, 3, 2, 8, 1, 1, 5, 4, 3, 2, 8, 1];

if(count($dataSet) > 10){
    $sorter = new Sorter(new QuickSortStrategy());
}else{
    $sorter = new Sorter(new BubbleSortStrategy());
}

$result = $sorter->sort($dataSet); // "Sorting using bubble sort";
echo implode(',',$result);
echo "\n";

