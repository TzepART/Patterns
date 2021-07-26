<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * @description Visitor
 * @package Patterns\BehavioralPatterns\Visitor
 */
interface AnimalOperationInterface
{
    public function visitMonkey(Monkey $monkey): void;
    public function visitLion(Lion $lion): void;
    public function visitDolphin(Dolphin $dolphin): void;
}
