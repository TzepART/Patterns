<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\FactoryMethod;

/**
 * Interface ToolInterface
 * @package Patterns\CreationalPatterns\FactoryMethod
 */
interface ToolInterface
{
    /**
     * @return mixed
     */
    public function makeAction();
}
