<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

/**
 * Create adapter around Rabbit
 *
 * Class RabbitAdapter
 * @package Patterns\StructuralPatterns\Adapter
 */
class RabbitAdapter implements BearInterface
{
    /**
     * @var Rabbit
     */
    private $rabbit;

    /**
     * RabbitAdapter constructor.
     * @param Rabbit $rabbit
     */
    public function __construct(Rabbit $rabbit)
    {
        $this->rabbit = $rabbit;
    }

    /**
     * @return mixed|void
     */
    public function roar()
    {
        $this->rabbit->squeak();
    }
}
