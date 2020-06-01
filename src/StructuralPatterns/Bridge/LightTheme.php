<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Class LightTheme
 * @package Patterns\StructuralPatterns\Bridge
 */
class LightTheme implements ThemeInterface
{
    /**
     * @return mixed|string
     */
    public function getColor()
    {
        return 'Off white' . PHP_EOL;
    }
}
