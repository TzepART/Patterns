<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * @description Visitor
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Speak implements AnimalOperationInterface
{
    public function visitMonkey(Monkey $monkey): void
    {
        $monkey->shout();
    }

    public function visitLion(Lion $lion): void
    {
        $lion->roar();
    }

    public function visitDolphin(Dolphin $dolphin): void
    {
        $dolphin->speak();
    }
}
