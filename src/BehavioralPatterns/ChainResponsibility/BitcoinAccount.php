<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\ChainResponsibility;

/**
 * Class BitcoinAccount
 * @package Patterns\BehavioralPatterns\ChainResponsibility
 */
class BitcoinAccount extends Account
{
    /**
     * @var float
     */
    protected $balance;

    /**
     * BitcoinAccount constructor.
     * @param float $balance
     */
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
