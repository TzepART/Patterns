<?php
/**
 * Created by PhpStorm.
 * User: Ri
 * Date: 08.03.2016
 * Time: 17:14
 */
/*
 * =====================================
 *       USING OF ABSTRACT FACTORY
 * =====================================
 */

$firstProduct = AbstractFactory::getFactory()->getProduct();
Config::$factory = 2;
$secondProduct = AbstractFactory::getFactory()->getProduct();

print_r($firstProduct->getName());
// The first product from the first factory
print_r($secondProduct->getName());
// Second product from second factory