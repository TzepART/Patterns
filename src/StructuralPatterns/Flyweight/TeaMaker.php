<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Flyweight;

/**
 * @description Work as Factory Method but, reusing objects of Tea if can
 * @package Patterns\StructuralPatterns\Flyweight
 */
class TeaMaker
{
    /**
     * @var array<string, TeaInterface>
     */
    protected array $availableTea = [];

    public function make(string $preference): TeaInterface
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = (new Tea())->setCountUsing(1);
        } else {
            $tea = $this->availableTea[$preference];
            $tea->setCountUsing($tea->getCountUsing() + 1);
        }

        return $this->availableTea[$preference];
    }
}
