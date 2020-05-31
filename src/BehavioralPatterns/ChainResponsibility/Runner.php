<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\ChainResponsibility;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    /**Create the main bank account containing the logic of linking invoices to
     * the chains, and the accounts themselves.*/
    public static function using(): void
    {
        /**
         * Using. Create chain $bank->$paypal->$bitcoin
         * Priority with the bank
         * If the bank can not pay, go to Paypal
         * If Paypal can not, go to Bitcoin
         */

        $bank = new BankAccount(100);      // BankAccount have balance 100
        $paypal = new PaypalAccount(200);  // PaypalAccount have balance 200
        $bitcoin = new BitcoinAccount(300);// BitcoinAccount have balance 300

        $bank->setNext($paypal);
        $paypal->setNext($bitcoin);

        // Let's start with the bank
        try {
            $bank->pay(259);
        } catch (\Exception $exception) {
            echo $exception->getMessage() . PHP_EOL;
        }

        /**
         * Output
         * ==============
         * Cannot pay using BankAccount. Proceeding ..
         * Cannot pay using PaypalAccount. Proceeding ..
         * Paid 259 using BitcoinAccount
         */
    }
}

