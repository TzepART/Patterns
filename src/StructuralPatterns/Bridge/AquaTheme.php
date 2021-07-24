<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Class AquaTheme
 * @package Patterns\StructuralPatterns\Bridge
 */
class AquaTheme implements ThemeInterface
{
    public function getColor(): string
    {
        return 'Light blue';
    }
}
