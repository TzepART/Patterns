<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 17/07/2018
 * Time: 00:53
 */

namespace Patterns\StructuralPatterns\Proxy;

/*
 * Вкратце
 * С помощью шаблона «Заместитель» класс представляет функциональность другого класса.
 * Или
 * В наиболее общей форме «Заместитель» — это класс, функционирующий как интерфейс к чему-либо.
 * Это оболочка или объект-агент, вызываемый клиентом для получения доступа к другому, «настоящему» объекту.
 * «Заместитель» может просто переадресовывать запросы настоящему объекту, а может предоставлять
 * дополнительную логику: кеширование данных при интенсивном выполнении операций или потреблении
 * ресурсов настоящим объектом; проверка предварительных условий (preconditions) до вызова выполнения
 * операций настоящим объектом.
 */

//Example
//Step 1. Create interface Door and SecretDoor that implements interface


/**
 * Class SecretDoor
 * @package Patterns\StructuralPatterns\Proxy
 */
class SecretDoor implements Door
{
    /**
     * @return mixed|void
     */
    public function open()
    {
        echo "Opening secret door".PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function close()
    {
        echo "Closing the secret door".PHP_EOL;
    }
}

//Step 1. Make a "proxy", so that the door can perform a protective function:

/**
 * Class Security
 * @package Patterns\StructuralPatterns\Proxy
 */
class Security
{
    /**
     * @var Door
     */
    protected $door;

    /**
     * Security constructor.
     * @param Door $door
     */
    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    /**
     * @param $password
     */
    public function open($password)
    {
        if ($this->authenticate($password)) {
            $this->door->open();
        } else {
            echo "Big no! It isn't possible.".PHP_EOL;
        }
    }

    /**
     * @param $password
     * @return bool
     */
    public function authenticate($password)
    {
        return $password === '$ecr@t';
    }


    public function close()
    {
        $this->door->close();
    }
}

//Step 3. Using
$door = new Security(new SecretDoor());
$door->open('invalid'); // Big no! It ain't possible.

$door->open('$ecr@t'); // Opening secret door
$door->close(); // Closing secret door
