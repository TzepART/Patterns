<?php
/**
 * Simple singleton class
 *
 * @package Patterns
 */

namespace Patterns\Classes\Singleton;


final class Product
{

    /**
     * @var self
     */
    private static $instance;

    /**
     * @var mixed
     */
    public $a;


    /**
     * Returns singleton
     *
     * @return self
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * The constructor is disabled
     */
    private function __construct()
    {
    }

    /**
     * Cloning is disabled
     */
    private function __clone()
    {
    }

    /**
     * Serialization is disabled
     */
    private function __sleep()
    {
    }

    /**
     * Unserialization is disabled
     */
    private function __wakeup()
    {
    }
}
