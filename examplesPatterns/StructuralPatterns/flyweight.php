<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 17/07/2018
 * Time: 00:20
 */

namespace Patterns\StructuralPatterns\Flyweight;

/*
 * Вкратце
 * Шаблон применяется для минимизирования использования памяти или вычислительной стоимости за счёт общего
 * использования как можно большего количества одинаковых объектов.
 * Или
 * «Приспособленец» — это объект, минимизирующий использование памяти за счёт общего с другими,
 * такими же объектами использования как можно большего объёма данных. Это способ применения многочисленных
 * объектов, когда простое повторяющееся представление приведёт к неприемлемому потреблению памяти.
 *
 * Цель
 * Оптимизация работы с памятью путём предотвращения создания экземпляров элементов, имеющих общую сущность.
 *
 * Описание
 * Flyweight используется для уменьшения затрат при работе с большим количеством мелких объектов. При проектировании
 * приспособленца необходимо разделить его свойства на внешние и внутренние. Внутренние свойства всегда неизменны,
 * тогда как внешние могут отличаться в зависимости от места и контекста применения и должны быть вынесены
 * за пределы приспособленца.
 * Flyweight дополняет шаблон Factory Method таким образом, что при обращении клиента к Factory Method для
 * создания нового объекта ищет уже созданный объект с такими же параметрами, что и у требуемого, и возвращает
 * его клиенту. Если такого объекта нет, то фабрика создаст новый.
 */

//Make class of tea and a teapot.
/**
 * Class Tea
 * @package Patterns\StructuralPatterns\Flyweight
 */
class Tea
{
    /**
     * @var integer
     */
    protected $countUsing;

    /**
     * @return int
     */
    public function getCountUsing(): int
    {
        return $this->countUsing;
    }

    /**
     * @param int $countUsing
     * @return $this
     */
    public function setCountUsing(int $countUsing)
    {
        $this->countUsing = $countUsing;
        return $this;
    }
}


// Work as Factory Method but, reusing objects of Tea if can
/**
 * Class TeaMaker
 * @package Patterns\StructuralPatterns\Flyweight
 */
class TeaMaker
{
    /**
     * @var Tea[]
     */
    protected $availableTea = [];

    /**
     * @param $preference
     * @return Tea
     */
    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = (new Tea())->setCountUsing(1);
        }else{
            /** @var Tea $tea */
            $tea = $this->availableTea[$preference];
            $tea->setCountUsing($tea->getCountUsing() + 1);
        }

        return $this->availableTea[$preference];
    }
}

//Create TeaShop, that makes and serves orders
/**
 * Class TeaShop
 * @package Patterns\StructuralPatterns\Flyweight
 */
class TeaShop
{
    /**
     * @var
     */
    protected $orders;
    /**
     * @var TeaMaker
     */
    protected $teaMaker;

    /**
     * TeaShop constructor.
     * @param TeaMaker $teaMaker
     */
    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    /**
     * @param string $teaType
     * @param int $table
     */
    public function takeOrder(string $teaType, int $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    /**
     *
     */
    public function serve()
    {
        /** @var Tea $tea */
        foreach ($this->orders as $table => $tea) {
            echo "Serving tea to table# " . $table.". Using tea - ".$tea->getCountUsing();
            echo "\n";
        }
    }
}

//Using
$teaMaker = new TeaMaker();
$shop = new TeaShop($teaMaker);

$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('more milk', 3);
$shop->takeOrder('without sugar', 5);

$shop->serve();
//Serving tea to table# 1. Using tea - 1
//Serving tea to table# 2. Using tea - 2
//Serving tea to table# 3. Using tea - 2
//Serving tea to table# 5. Using tea - 1
