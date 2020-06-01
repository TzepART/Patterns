<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * Class Lion
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Lion implements AnimalInterface
{

    public function roar()
    {
        echo 'Roaaar!' . PHP_EOL;
    }

    /**
     * @param AnimalOperationInterface $operation
     * @return mixed|void
     */
    public function accept(AnimalOperationInterface $operation)
    {
        $operation->visitLion($this);
    }
}
