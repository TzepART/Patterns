<?php
//include_once("views/index.php");

function __autoload($className) {
    if (file_exists("php-design-patterns-master/".$className . "/".$className . ".php")) {
        require_once "php-design-patterns-master/".$className . "/".$className . ".php";
        return true;
    }
    return false;
}

//__autoload("AbstractFactory");
///*
// * =====================================
// *       USING OF ABSTRACT FACTORY
// * =====================================
// */
//
//$firstProduct = AbstractFactory::getFactory()->getProduct();
//Config::$factory = 2;
//$secondProduct = AbstractFactory::getFactory()->getProduct();
//
//print_r($firstProduct->getName());
//// The first product from the first factory
//print_r($secondProduct->getName());
//// Second product from second factory

//__autoload("Singleton");
//
///*
// * =====================================
// *           USING OF SINGLETON
// * =====================================
// */
//
//$firstProduct = Product::getInstance();
//$secondProduct = Product::getInstance();
//
//$firstProduct->a = 1;
//$secondProduct->a = 2;
//
//print_r($firstProduct->a);
//// 2
//print_r($secondProduct->a);
//// 2


__autoload("Observer");

/*
 * =====================================
 *           USING OF OBSERVER
 * =====================================
 */

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



