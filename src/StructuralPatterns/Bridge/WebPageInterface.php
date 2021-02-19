<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

/**
 * Interface WebPageInterface
 * @package Patterns\StructuralPatterns\Bridge
 */
interface WebPageInterface
{
    /**
     * WebPageInterface constructor.
     * @param ThemeInterface $theme
     */
    public function __construct(ThemeInterface $theme);

    /**
     * @return mixed
     */
    public function getContent();
}
