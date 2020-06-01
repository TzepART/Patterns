<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * Class Dolphin
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Dolphin implements AnimalInterface
{

    public function speak()
    {
        echo 'Tuut tuttu tuutt!' . PHP_EOL;
    }

    /**
     * @param AnimalOperationInterface $operation
     * @return mixed|void
     */
    public function accept(AnimalOperationInterface $operation)
    {
        $operation->visitDolphin($this);
    }
}
