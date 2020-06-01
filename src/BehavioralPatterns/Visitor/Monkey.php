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

    /**
     * @param AnimalOperationInterface $operation
     * @return mixed|void
     */
    public function accept(AnimalOperationInterface $operation)
    {
        $operation->visitMonkey($this);
    }
}
