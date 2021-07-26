<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Flyweight;

/**
 * Make class of tea.
 *
 * Class Tea
 * @package Patterns\StructuralPatterns\Flyweight
 */
interface TeaInterface
{
    public function getCountUsing(): int;
    public function setCountUsing(int $countUsing): self;
}