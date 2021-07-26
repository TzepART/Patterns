<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\Singleton;

/**
 * Class MainBoss
 * @package Patterns\CreationalPatterns\Singleton
 */
final class MainBoss
{
    private static $instance;

    // hide construct
    private function __construct()
    {}

    /**
     * @return MainBoss
     */
    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    // hide cloning
    private function __clone()
    {}
}
