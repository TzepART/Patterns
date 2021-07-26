<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * Class Monkey
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Monkey implements AnimalInterface
{
    public function shout()
    {
        echo 'Ooh oo aa aa!' . PHP_EOL;
    }

    public function accept(AnimalOperationInterface $operation): void
    {
        $operation->visitMonkey($this);
    }
}
