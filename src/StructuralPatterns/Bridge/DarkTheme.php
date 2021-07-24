<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Class DarkTheme
 * @package Patterns\StructuralPatterns\Bridge
 */
class DarkTheme implements ThemeInterface
{
    public function getColor(): string
    {
        return 'Dark Black';
    }
}
