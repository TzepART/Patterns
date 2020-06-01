<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Strategy;

/**
 * Class Sorter
 * @package Patterns\BehavioralPatterns\Strategy
 */
class Sorter
{
    /**
     * @var SortStrategyInterface
     */
    protected $sorter;

    /**
     * Sorter constructor.
     * @param SortStrategyInterface $sorter
     */
    public function __construct(SortStrategyInterface $sorter)
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
