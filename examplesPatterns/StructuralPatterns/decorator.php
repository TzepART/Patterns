<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 16/07/2018
 * Time: 23:36
 */

/*
 * Вкратце
 * Шаблон «Декоратор» позволяет во время выполнения динамически изменять поведение объекта,
 * обёртывая его в объект класса «декоратора».
 * Или
 * Шаблон «Декоратор» позволяет подключать к объекту дополнительное поведение (статически или динамически),
 * не влияя на поведение других объектов того же класса. Шаблон часто используется для соблюдения принципа
 * единственной обязанности (Single Responsibility Principle), поскольку позволяет разделить функциональность
 * между классами для решения конкретных задач.
 *
 */

//Example
//Step 1. Add interface for coffee and simple class

/**
 * Interface Coffee
 */
interface Coffee
{
    /**
     * @return integer
     */
    public function getCost();

    /**
     * @return string
     */
    public function getFormattedCost();

    /**
     * @return string
     */
    public function getDescription();
}

/**
 * Trait CostTrait
 */
trait CostTrait{

    /**
     * @return string
     */
    public function getFormattedCost()
    {
        return "Cost - ".$this->getCost();
    }
}

/**
 * Class SimpleCoffee
 */
class SimpleCoffee implements Coffee
{
    use CostTrait;

    /**
     * @return int
     */
    public function getCost()
    {
        return 10;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Simple coffee';
    }
}

//Step 2. You can make the code extensible so that you can make modifications if necessary. Add "decorators":

/**
 * Class MilkCoffee
 */
class MilkCoffee implements Coffee
{
    use CostTrait;

    /**
     * @var Coffee
     */
    protected $coffee;

    /**
     * MilkCoffee constructor.
     * @param Coffee $coffee
     */
    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->coffee->getCost() + 2;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->coffee->getDescription() . ', milk';
    }
}

/**
 * Class WhipCoffee
 */
class WhipCoffee implements Coffee
{
    use CostTrait;

    /**
     * @var Coffee
     */
    protected $coffee;

    /**
     * WhipCoffee constructor.
     * @param Coffee $coffee
     */
    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->coffee->getCost() + 5;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->coffee->getDescription() . ', whip';
    }
}

/**
 * Class VanillaCoffee
 */
class VanillaCoffee implements Coffee
{
    use CostTrait;

    /**
     * @var Coffee
     */
    protected $coffee;

    /**
     * VanillaCoffee constructor.
     * @param Coffee $coffee
     */
    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->coffee->getCost() + 3;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->coffee->getDescription() . ', vanilla';
    }
}

//Step 3. Using
$someCoffee = new SimpleCoffee();
echo $someCoffee->getFormattedCost(); // Cost - 10
echo "\n";
echo $someCoffee->getDescription(); // Simple Coffee
echo "\n";


$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getFormattedCost(); // Cost - 12
echo "\n";
echo $someCoffee->getDescription(); // Simple Coffee, milk
echo "\n";


$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getFormattedCost(); // Cost - 17
echo "\n";
echo $someCoffee->getDescription(); // Simple Coffee, milk, whip
echo "\n";

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getFormattedCost(); // Cost - 20
echo "\n";
echo $someCoffee->getDescription(); // Simple Coffee, milk, whip, vanilla
echo "\n";
