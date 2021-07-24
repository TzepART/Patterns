<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Class Careers
 * @package Patterns\StructuralPatterns\Bridge
 */
class Careers implements WebPageInterface
{
    public function __construct(protected ThemeInterface $theme){}

    public function getContent(): string
    {
        return 'Careers page in ' . $this->theme->getColor() . PHP_EOL;
    }
}
