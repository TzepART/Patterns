<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Jump implements AnimalOperationInterface
{
    public function visitMonkey(Monkey $monkey): void
    {
        echo 'Jumped 20 feet high! on to the tree!' . PHP_EOL;
    }

    public function visitLion(Lion $lion): void
    {
        echo 'Jumped 7 feet! Back on the ground!' . PHP_EOL;
    }

    public function visitDolphin(Dolphin $dolphin): void
    {
        echo 'Walked on water a little and disappeared' . PHP_EOL;
    }
}
