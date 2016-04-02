<?php
/**
 * Created by PhpStorm.
 * User: Ri
 * Date: 02.04.2016
 * Time: 20:14
 */

use Patterns\Classes\LazyInitialization\Factory;

/*
 * =====================================
 *      USING OF LAZY INITIALIZATION
 * =====================================
 */

$factory = new Factory();

print_r($factory->getFirstProduct()->getName());
// The first product
print_r($factory->getSecondProduct()->getName());
// Second product
print_r($factory->getFirstProduct()->getName());
// The first product
