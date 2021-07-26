<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\ChainResponsibility;

use \Exception;

/**
 * Class Account
 * @package Patterns\BehavioralPatterns\ChainResponsibility
 */
abstract class AbstractAccount implements AccountInterface, AccountChainInterface
{
    public function __construct(
        protected float $balance,
        protected ?AccountInterface $nextInChain = null
    ){}

    /**
     * @throws Exception
     */
    public function pay(float $amountToPay): void
    {
        if ($this->canPay($amountToPay)) {
            echo sprintf('Paid %s using %s' . PHP_EOL, $amountToPay, static::class);
        } elseif ($this->getNext()) {
            echo sprintf('Cannot pay using %s. Processing ..' . PHP_EOL, static::class);
            $this->getNext()->pay($amountToPay);
        } else {
            throw new Exception('None of the accounts have enough balance');
        }
    }

    public function canPay(float $amount): bool
    {
        return $this->balance >= $amount;
    }

    public function getNext(): AccountInterface
    {
        return $this->nextInChain;
    }
}
