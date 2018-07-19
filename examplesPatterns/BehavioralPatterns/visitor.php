<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 18/07/2018
 * Time: 01:40
 */

namespace Patterns\BehavioralPatterns\Visitor;

/*
 * Вкратце
 * Шаблон «Посетитель» позволяет добавлять будущие операции для объектов без их модифицирования.
 * Или
 * Шаблон «Посетитель» — это способ отделения алгоритма от структуры объекта, в которой он оперирует.
 * Результат отделения — возможность добавлять новые операции в существующие структуры объектов без
 * их модифицирования. Это один из способов соблюдения принципа открытости/закрытости (open/closed principle).
 */

//Example. there are several kinds of animals, and we need to listen to the sounds they make.

//Step 1. Create "Place of visit" and "Visitor" interfaces
//Place of visit
/**
 * Interface Animal
 * @package Patterns\BehavioralPatterns\Visitor
 */
interface Animal
{
    /**
     * @param AnimalOperation $operation
     * @return mixed
     */
    public function accept(AnimalOperation $operation);
}

//Visitor
/**
 * Interface AnimalOperation
 * @package Patterns\BehavioralPatterns\Visitor
 */
interface AnimalOperation
{
    /**
     * @param Monkey $monkey
     * @return mixed
     */
    public function visitMonkey(Monkey $monkey);

    /**
     * @param Lion $lion
     * @return mixed
     */
    public function visitLion(Lion $lion);

    /**
     * @param Dolphin $dolphin
     * @return mixed
     */
    public function visitDolphin(Dolphin $dolphin);
}

//Step 2. Create Animals
/**
 * Class Monkey
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Monkey implements Animal
{
    /**
     *
     */
    public function shout()
    {
        echo 'Ooh oo aa aa!'.PHP_EOL;
    }

    /**
     * @param AnimalOperation $operation
     * @return mixed|void
     */
    public function accept(AnimalOperation $operation)
    {
        $operation->visitMonkey($this);
    }
}

/**
 * Class Lion
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Lion implements Animal
{
    /**
     *
     */
    public function roar()
    {
        echo 'Roaaar!'.PHP_EOL;
    }

    /**
     * @param AnimalOperation $operation
     * @return mixed|void
     */
    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }
}

/**
 * Class Dolphin
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Dolphin implements Animal
{
    /**
     *
     */
    public function speak()
    {
        echo 'Tuut tuttu tuutt!'.PHP_EOL;
    }

    /**
     * @param AnimalOperation $operation
     * @return mixed|void
     */
    public function accept(AnimalOperation $operation)
    {
        $operation->visitDolphin($this);
    }
}

//Step 3. Create Visitor
/**
 * Class Speak
 * @package Patterns\BehavioralPatterns\Visitor
 */
class Speak implements AnimalOperation
{
    /**
     * @param Monkey $monkey
     * @return mixed|void
     */
    public function visitMonkey(Monkey $monkey)
    {
        $monkey->shout();
    }

    /**
     * @param Lion $lion
     * @return mixed|void
     */
    public function visitLion(Lion $lion)
    {
        $lion->roar();
    }

    /**
     * @param Dolphin $dolphin
     * @return mixed|void
     */
    public function visitDolphin(Dolphin $dolphin)
    {
        $dolphin->speak();
    }
}

//Using
$monkey = new Monkey();
$lion = new Lion();
$dolphin = new Dolphin();

$speak = new Speak();

$monkey->accept($speak);  //Ooh oo aa aa!
$lion->accept($speak);    //Roaaar!
$dolphin->accept($speak); //Tuut tuttu tuutt!



