<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

/**
 * @description Place of visit
 * @package Patterns\BehavioralPatterns\Visitor
 */
interface AnimalInterface
{
    public function accept(AnimalOperationInterface $operation): void;
}
