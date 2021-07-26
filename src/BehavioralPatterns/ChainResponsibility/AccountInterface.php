<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\ChainResponsibility;

use \Exception;

/**
 * @package Patterns\BehavioralPatterns\ChainResponsibility
 */
interface AccountInterface
{
    /**
     * @throws Exception
     */
    public function pay(float $amountToPay): void;
    public function canPay(float $amount): bool;
}