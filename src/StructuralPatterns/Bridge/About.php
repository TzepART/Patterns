<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Class About
 * @package Patterns\StructuralPatterns\Bridge
 */
class About implements WebPageInterface
{
    /**
     * @var ThemeInterface
     */
    protected $theme;

    /**
     * About constructor.
     * @param ThemeInterface $theme
     */
    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return "About page in " . $this->theme->getColor() . PHP_EOL;
    }
}
