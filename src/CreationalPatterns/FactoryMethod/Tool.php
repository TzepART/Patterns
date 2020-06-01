<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\FactoryMethod;

/**
 * Class Tool
 */
abstract class Tool implements ToolInterface
{
    /**
     * @param $toolClass
     * @return mixed
     */
    public static function initial($toolClass)
    {
        return new $toolClass;
    }
}
