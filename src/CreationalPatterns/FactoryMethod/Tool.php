<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\FactoryMethod;

/**
 * Class Tool
 */
abstract class Tool implements ToolInterface
{
    /**
     * @param class-string $toolClass
     * @return mixed
     */
    public static function initial(string $toolClass): ToolInterface
    {
        return new $toolClass;
    }
}
