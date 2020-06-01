<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\Singleton;

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
        // hide construct
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
        // hide cloning
    }


    private function __wakeup()
    {
        // hide deserialization
    }
}
