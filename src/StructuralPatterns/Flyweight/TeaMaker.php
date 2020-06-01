<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Flyweight;

/**
 * Work as Factory Method but, reusing objects of Tea if can
 *
 * Class TeaMaker
 * @package Patterns\StructuralPatterns\Flyweight
 */
class TeaMaker
{
    /**
     * @var Tea[]
     */
    protected $availableTea = [];

    /**
     * @param $preference
     * @return Tea
     */
    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = (new Tea())->setCountUsing(1);
        } else {
            /** @var Tea $tea */
            $tea = $this->availableTea[$preference];
            $tea->setCountUsing($tea->getCountUsing() + 1);
        }

        return $this->availableTea[$preference];
    }
}
