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

    public function accept(AnimalOperationInterface $operation): void
    {
        $operation->visitLion($this);
    }
}
