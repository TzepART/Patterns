<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Flyweight;

/**
 * @description Make class of tea.
 * @package Patterns\StructuralPatterns\Flyweight
 */
class Tea implements TeaInterface
{
    protected int $countUsing;

    public function getCountUsing(): int
    {
        return $this->countUsing;
    }

    public function setCountUsing(int $countUsing): self
    {
        $this->countUsing = $countUsing;

        return $this;
    }
}
