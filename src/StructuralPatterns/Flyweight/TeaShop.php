<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Flyweight;

/**
 * Create TeaShop, that makes and serves orders
 *
 * Class TeaShop
 * @package Patterns\StructuralPatterns\Flyweight
 */
class TeaShop
{
    /**
     * @var
     */
    protected $orders;

    /**
     * @var TeaMaker
     */
    protected $teaMaker;

    /**
     * TeaShop constructor.
     * @param TeaMaker $teaMaker
     */
    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    /**
     * @param string $teaType
     * @param int $table
     */
    public function takeOrder(string $teaType, int $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }


    public function serve()
    {
        /** @var Tea $tea */
        foreach ($this->orders as $table => $tea) {
            echo "Serving tea to table# " . $table . ". Using tea - " . $tea->getCountUsing() . PHP_EOL;
        }
    }
}
