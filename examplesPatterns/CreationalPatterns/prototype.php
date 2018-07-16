<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15/07/2018
 * Time: 02:25
 */

namespace Patterns\CreationalPatterns\Prototype;

/*
 * Вкратце
 * Объект создаётся посредством клонирования существующего объекта.
 * Или другими словами Шаблон «Прототип» используется, когда типы создаваемых объектов определяются экземпляром-прототипом,
 * клонированным для создания новых объектов.
 *
 * Когда использовать?
 * Когда необходимый объект аналогичен уже существующему или когда создание с нуля дороже клонирования.
 *
 * В PHP можно использовать __clone
 */

/**
 * Class Sheep
 * @package Patterns\CreationalPatterns\Prototype
 */
class Sheep
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $category;

    /**
     * Sheep constructor.
     * @param string $name
     * @param string $category
     */
    public function __construct(string $name, string $category = 'Mountain Sheep')
    {
        $this->name = $name;
        $this->category = $category;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}

//Using
$original = new Sheep('Jolly');
echo $original->getName(); // Jolly
echo $original->getCategory(); // Mountain Sheep

// Clone and modify, what you want
$cloned = clone $original;
$cloned->setName('Dolly');
echo $cloned->getName(); // Dolly
echo $cloned->getCategory(); // Mountain Sheep