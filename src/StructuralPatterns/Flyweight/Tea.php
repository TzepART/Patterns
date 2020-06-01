<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Flyweight;

/**
 * Make class of tea and a teapot.
 *
 * Class Tea
 * @package Patterns\StructuralPatterns\Flyweight
 */
class Tea
{
    /**
     * @var integer
     */
    protected $countUsing;

    /**
     * @return int
     */
    public function getCountUsing(): int
    {
        return $this->countUsing;
    }

    /**
     * @param int $countUsing
     * @return $this
     */
    public function setCountUsing(int $countUsing)
    {
        $this->countUsing = $countUsing;
        return $this;
    }
}
