<?php
/**
 * Created by PhpStorm.
 * User: Ri
 * Date: 08.03.2016
 * Time: 17:16
 */

/*
 * =====================================
 *           USING OF OBSERVER
 * =====================================
 */

use Patterns\Classes\Observer\priceSimulator;
use Patterns\Classes\Observer\Pound;
use Patterns\Classes\Observer\Yen;
use Patterns\Classes\Observer\Euro;

$priceSimulator = new priceSimulator();

/*
 * install default currency
 * */
$currency1 = new Pound(0.60);
$currency2 = new Yen(122);
$currency3 = new Euro(122);


/*
 * added default currency in object Observer
 * */
$priceSimulator->addCurrency($currency1);
$priceSimulator->addCurrency($currency2);
$priceSimulator->addCurrency($currency3);

/*
 * Update base price -> update other prices
 * */
echo "<hr/>";
$priceSimulator->updatePrice();

echo "<hr/>";
$priceSimulator->updatePrice();
