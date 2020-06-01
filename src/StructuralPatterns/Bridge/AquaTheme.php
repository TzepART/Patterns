<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Class AquaTheme
 * @package Patterns\StructuralPatterns\Bridge
 */
class AquaTheme implements ThemeInterface
{
    /**
     * @return mixed|string
     */
    public function getColor()
    {
        return 'Light blue' . PHP_EOL;
    }
}
