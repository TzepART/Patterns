<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

/**
 * @package Patterns\CreationalPatterns\SimpleFactory
 */
interface DoorInterface
{
    public function getWidth(): float;
    public function getHeight(): float;
}
