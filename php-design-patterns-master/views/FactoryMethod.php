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


echo "<pre>";
var_dump("*********************************FACTORY****************************");
echo "</pre>";
/*
 * В зависимоти от условия 150,50 фабричный метод(getInstance)
 *  создает экзэмпляры разных классов
 * возвращает разные обекты в зависимости от условий
 * */
$userFactory1 = UserFactory::create(150);
$userFactory2 = UserFactory::create(50);
// The first product
echo "<pre>";
var_dump($userFactory1->getName());
echo "</pre>";

// Second product
echo "<pre>";
var_dump($userFactory2->getName());
echo "</pre>";

/*
 * Похожий на фабрику - стартегия. Позволяет не задумываться
 * о реализации метода в классе
 * Реализует разную логику метода в зависимости от условий
 * */

echo "<pre>";
var_dump("***********************************STRATEGY***************************");
echo "</pre>";
$userStrategy = new UserStrategy();
// The first name
echo "<pre>";
var_dump($userStrategy->getName(150));
echo "</pre>";

// Second name
echo "<pre>";
var_dump($userStrategy->getName(50));
echo "</pre>";


