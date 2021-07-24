<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Class About
 * @package Patterns\StructuralPatterns\Bridge
 */
class About implements WebPageInterface
{
    public function __construct(protected ThemeInterface $theme){}

    public function getContent(): string
    {
        return 'About page in ' . $this->theme->getColor() . PHP_EOL;
    }
}
