<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 16/07/2018
 * Time: 13:36
 */

namespace Patterns\StructuralPatterns\Adapter;

/*
 * Вкратце
 * Шаблон «Адаптер» позволяет помещать несовместимый объект в обёртку, чтобы он оказался совместимым с другим классом.
 * Или шаблон проектирования «Адаптер» позволяет использовать интерфейс существующего класса как другой интерфейс. Этот
 * шаблон часто применяется для обеспечения работы одних классов с другими без изменения их исходного кода.
 *
 */

//For example create several types of bears
/**
 * Interface Bear
 * @package Patterns\StructuralPatterns\Adapter
 */
interface Bear
{
    /**
     * @return mixed
     */
    public function roar();
}

/**
 * Class AmericanBear
 * @package Patterns\StructuralPatterns\Adapter
 */
class AmericanBear implements Bear
{
    /**
     * @return mixed|void
     */
    public function roar()
    {
    }
}

/**
 * Class AsianBear
 * @package Patterns\StructuralPatterns\Adapter
 */
class AsianBear implements Bear
{
    /**
     * @return mixed|void
     */
    public function roar()
    {
    }
}

//Now create hunter who hunts any type of bears

/**
 * Class Hunter
 * @package Patterns\StructuralPatterns\Adapter
 */
class Hunter
{
    /**
     * @param Bear $bear
     */
    public function hunt(Bear $bear)
    {
    }
}

//Now create rabbit. It does not implement Bear interface, but the hunter can hunt the rabbit

/**
 * Class Rabbit
 * @package Patterns\StructuralPatterns\Adapter
 */
class Rabbit{
    /**
     *
     */
    public function squeak()
    {
        
    }
}

//Create adapter around Rabbit

/**
 * Class RabbitAdapter
 * @package Patterns\StructuralPatterns\Adapter
 */
class RabbitAdapter implements Bear{
    /**
     * @var Rabbit
     */
    private $rabbit;


    /**
     * RabbitAdapter constructor.
     * @param Rabbit $rabbit
     */
    public function __construct(Rabbit $rabbit)
    {
        $this->rabbit = $rabbit;
    }

    /**
     * @return mixed|void
     */
    public function roar()
    {
        $this->rabbit->squeak();
    }
}

//Now hunter can hunt bear and rabbit
$rabbit = new Rabbit();
$rabbitAdapter = new RabbitAdapter($rabbit);

$hunter = new Hunter();
$hunter->hunt($rabbitAdapter);