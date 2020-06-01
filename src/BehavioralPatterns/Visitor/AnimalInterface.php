<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * Place of visit
 *
 * Interface Animal
 * @package Patterns\BehavioralPatterns\Visitor
 */
interface AnimalInterface
{
    /**
     * @param AnimalOperationInterface $operation
     * @return mixed
     */
    public function accept(AnimalOperationInterface $operation);
}
