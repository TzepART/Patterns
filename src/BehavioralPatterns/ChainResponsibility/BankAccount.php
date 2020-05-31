<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\ChainResponsibility;

/**
 * Class BankAccount
 * @package Patterns\BehavioralPatterns\ChainResponsibility
 */
class BankAccount extends Account
{
    /**
     * @var float
     */
    protected $balance;

    /**
     * BankAccount constructor.
     * @param float $balance
     */
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
