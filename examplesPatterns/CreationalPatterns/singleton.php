<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15/07/2018
 * Time: 02:32
 */

namespace Patterns\CreationalPatterns\Singleton;

/*
 * Вкратце
 * Шаблон позволяет удостовериться, что создаваемый объект — единственный в своём классе.
 * Шаблон «Одиночка» позволяет ограничивать создание класса единственным объектом. Это удобно, когда для
 * координации действий в рамках системы требуется, чтобы объект был единственным в своём классе.
 *
 * недостатки шаблона:
 * - вносит в приложение глобальное состояние, так что изменение в одном месте может повлиять на все остальные случаи использования
 * - он делает ваш код сильно связанным (tightly coupled),
 * - создание прототипа (mocking) «Одиночки» может быть затруднено.
 */

/**
 * Class MainBoss
 * @package Patterns\CreationalPatterns\Singleton
 */
final class MainBoss
{
    /**
     * @var
     */
    private static $instance;

    /**
     * MainBoss constructor.
     */
    private function __construct()
    {
        // Прячем конструктор
    }

    /**
     * @return MainBoss
     */
    public static function getInstance(): MainBoss
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone()
    {
        // Отключаем клонирование
    }


    private function __wakeup()
    {
        // Отключаем десериализацию
    }
}

//Using
$president1 = MainBoss::getInstance();
$president2 = MainBoss::getInstance();

var_dump($president1 === $president2); // true
