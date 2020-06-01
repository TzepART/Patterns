<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Class Careers
 * @package Patterns\StructuralPatterns\Bridge
 */
class Careers implements WebPageInterface
{
    /**
     * @var ThemeInterface
     */
    protected $theme;

    /**
     * Careers constructor.
     * @param ThemeInterface $theme
     */
    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed|string
     */
    public function getContent()
    {
        return "Careers page in " . $this->theme->getColor() . PHP_EOL;
    }
}
