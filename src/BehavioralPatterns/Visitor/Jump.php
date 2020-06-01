<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * Class Jump
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Jump implements AnimalOperationInterface
{
    /**
     * @param Monkey $monkey
     * @return mixed|void
     */
    public function visitMonkey(Monkey $monkey)
    {
        echo 'Jumped 20 feet high! on to the tree!' . PHP_EOL;
    }

    /**
     * @param Lion $lion
     * @return mixed|void
     */
    public function visitLion(Lion $lion)
    {
        echo 'Jumped 7 feet! Back on the ground!' . PHP_EOL;
    }

    /**
     * @param Dolphin $dolphin
     * @return mixed|void
     */
    public function visitDolphin(Dolphin $dolphin)
    {
        echo 'Walked on water a little and disappeared' . PHP_EOL;
    }
}
