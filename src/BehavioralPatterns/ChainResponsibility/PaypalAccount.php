<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\ChainResponsibility;

/**
 * Class PaypalAccount
 * @package Patterns\BehavioralPatterns\ChainResponsibility
 */
class PaypalAccount extends Account
{
    /**
     * @var float
     */
    protected $balance;

    /**
     * PaypalAccount constructor.
     * @param float $balance
     */
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}

