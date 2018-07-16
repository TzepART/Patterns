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
interface Bear
{
    public function roar();
}

class AmericanBear implements Bear
{
    public function roar()
    {
    }
}

class AsianBear implements Bear
{
    public function roar()
    {
    }
}

//Now create hunter who hunts any type of bears
class Hunter
{
    public function hunt(Bear $bear)
    {
    }
}

//Now create rabbit. It does not implement Bear interface, but the hunter can hunt the rabbit
class Rabbit{
    public function squeak()
    {
        
    }
}

//Create adapter around Rabbit
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