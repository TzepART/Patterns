<?php
/**
 * Created by PhpStorm.
 * User: Ri
 * Date: 08.03.2016
 * Time: 17:14
 */


/*
 * =====================================
 *           USING OF SINGLETON
 * =====================================
 */

$firstProduct = Product::getInstance();
$secondProduct = Product::getInstance();

$firstProduct->a = 1;
$secondProduct->a = 2;

print_r($firstProduct->a);
// 2
print_r($secondProduct->a);
// 2