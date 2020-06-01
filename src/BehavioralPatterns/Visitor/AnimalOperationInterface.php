<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * Visitor
 *
 * Interface AnimalOperation
 * @package Patterns\BehavioralPatterns\Visitor
 */
interface AnimalOperationInterface
{
    /**
     * @param Monkey $monkey
     * @return mixed
     */
    public function visitMonkey(Monkey $monkey);

    /**
     * @param Lion $lion
     * @return mixed
     */
    public function visitLion(Lion $lion);

    /**
     * @param Dolphin $dolphin
     * @return mixed
     */
    public function visitDolphin(Dolphin $dolphin);
}
