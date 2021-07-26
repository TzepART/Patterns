<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Flyweight;

/**
 * @description Create TeaShop, that makes and serves orders
 * @package Patterns\StructuralPatterns\Flyweight
 */
final class TeaShop
{
    /**
     * @var array<int, TeaInterface>
     */
    protected array $orders = [];

    /**
     * TeaShop constructor.
     */
    public function __construct(private TeaMaker $teaMaker)
    {}

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
        foreach ($this->orders as $table => $tea) {
            echo sprintf('Serving tea to table #%d Using tea - %d', $table, $tea->getCountUsing()) . PHP_EOL;
        }
    }
}
