<?php
/**
 * Created by PhpStorm.
 * User: Ri
 * Date: 07.05.2016
 * Time: 14:45
 */

/*
 * =====================================
 *        USING OF FACTORY METHOD
 * =====================================
 */

$factory = new FirstFactory();
$firstProduct = $factory->getProduct();
$factory = new SecondFactory();
$secondProduct = $factory->getProduct();

// The first product
echo "<pre>";
var_dump($firstProduct->getName());
echo "</pre>";

// Second product
echo "<pre>";
var_dump($secondProduct->getName());
echo "</pre>";
