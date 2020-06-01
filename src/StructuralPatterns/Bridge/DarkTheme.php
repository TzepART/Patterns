<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Class DarkTheme
 * @package Patterns\StructuralPatterns\Bridge
 */
class DarkTheme implements ThemeInterface
{
    /**
     * @return mixed|string
     */
    public function getColor()
    {
        return 'Dark Black' . PHP_EOL;
    }
}
