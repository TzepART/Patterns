<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\ChainResponsibility;

/**
 * Class Account
 * @package Patterns\BehavioralPatterns\ChainResponsibility
 */
abstract class Account
{
    /**
     * @var Account
     */
    protected $successor;

    /**
     * @var integer
     */
    protected $balance;

    /**
     * @param Account $account
     */
    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    /**
     * @param float $amountToPay
     * @throws \Exception
     */
    public function pay(float $amountToPay)
    {
        if ($this->canPay($amountToPay)) {
            echo sprintf('Paid %s using %s' . PHP_EOL, $amountToPay, static::class);
        } elseif ($this->successor) {
            echo sprintf('Cannot pay using %s. Processing ..' . PHP_EOL, static::class);
            $this->successor->pay($amountToPay);
        } else {
            throw new \Exception('None of the accounts have enough balance');
        }
    }

    /**
     * @param $amount
     * @return bool
     */
    public function canPay($amount): bool
    {
        return $this->balance >= $amount;
    }
}
