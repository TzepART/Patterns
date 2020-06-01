<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * Visitor
 *
 * Class Speak
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Speak implements AnimalOperationInterface
{
    /**
     * @param Monkey $monkey
     * @return mixed|void
     */
    public function visitMonkey(Monkey $monkey)
    {
        $monkey->shout();
    }

    /**
     * @param Lion $lion
     * @return mixed|void
     */
    public function visitLion(Lion $lion)
    {
        $lion->roar();
    }

    /**
     * @param Dolphin $dolphin
     * @return mixed|void
     */
    public function visitDolphin(Dolphin $dolphin)
    {
        $dolphin->speak();
    }
}
