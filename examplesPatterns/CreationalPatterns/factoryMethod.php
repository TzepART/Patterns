<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 13/07/2018
 * Time: 13:43
 */

namespace Patterns\CreationalPatterns\FactoryMethod;

/*
 * Factory Method
 * Вкратце
 * Определяет интерфейс для создания объекта, но оставляет подклассам решение о том,
 * какой класс инстанцировать. Фабричный метод позволяет классу делегировать создание подклассов.
 *
 * Когда использовать?
 * - классу заранее неизвестно, объекты каких подклассов ему нужно создавать.
 * - класс спроектирован так, чтобы объекты, которые он создаёт, специфицировались подклассами.
 * - класс делегирует свои обязанности одному из нескольких вспомогательных подклассов, и планируется
 * локализовать знание о том, какой класс принимает эти обязанности на себя
 */


/**
 * Interface ToolInterface
 * @package Patterns\CreationalPatterns\FactoryMethod
 */
interface ToolInterface{
    /**
     * @return mixed
     */
    public function makeAction();
}

/**
 * Class Tool
 */
abstract class Tool implements ToolInterface {

    /**
     * @param $toolClass
     * @return mixed
     */
    public static function initial($toolClass)
    {
        return new $toolClass;
    }
}

/**
 * Class Hammer
 */
class Hammer extends Tool{

    /**
     * @return mixed|void
     */
    public function makeAction()
    {
        echo "Bam Bam Bam!!!";
    }

}

/**
 * Class Saw
 */
class Saw extends Tool{

    /**
     * @return mixed|void
     */
    public function makeAction()
    {
        echo "Vzhzhzhzh!!!";
    }

}

/** @var Hammer $hammer */
$hammer = Tool::initial(Hammer::class);
/** @var Saw $saw */
$saw = Tool::initial(Saw::class);

$hammer->makeAction();
$saw->makeAction();