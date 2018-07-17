<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 17/07/2018
 * Time: 18:58
 */

namespace Patterns\BehavioralPatterns\ChainResponsibility;

/*
 * Вкратце
 * Шаблон «Цепочка ответственности» позволяет создавать цепочки объектов. Запрос входит с одного конца цепочки и
 * движется от объекта к объекту, пока не будет найден подходящий обработчик.
 * Или
 * Шаблон «Цепочка ответственности» содержит исходный управляющий объект и ряд обрабатывающих объектов.
 * Каждый обрабатывающий объект содержит логику, определяющую типы командных объектов, которые он может
 * обрабатывать, а остальные передаются по цепочке следующему обрабатывающему объекту.
 *
 */

//Example. Create the main bank account containing the logic of linking invoices to
//the chains, and the accounts themselves.
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
            echo sprintf('Paid %s using %s' . PHP_EOL, $amountToPay, get_called_class());
        } elseif ($this->successor) {
            echo sprintf('Cannot pay using %s. Proceeding ..' . PHP_EOL, get_called_class());
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

//Using. Create chain $bank->$paypal->$bitcoin

//Priority with the bank
//If the bank can not pay, go to Paypal
//If Paypal can not, go to Bitcoin


$bank = new BankAccount(100);          // BankAccount have balance 100
$paypal = new PaypalAccount(200);      // PaypalAccount have balance 200
$bitcoin = new BitcoinAccount(300);    // BitcoinAccount have balance 300

$bank->setNext($paypal);
$paypal->setNext($bitcoin);

// Начнём с банка
try{
    $bank->pay(259);
}catch (\Exception $exception){
    echo $exception->getMessage();
    echo "\n";
}

// Output
// ==============
//Cannot pay using BankAccount. Proceeding ..
//Cannot pay using PaypalAccount. Proceeding ..
//Paid 259 using BitcoinAccount
