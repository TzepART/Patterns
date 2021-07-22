<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

/**
 * Interface HouseInterface
 */
interface HouseInterface
{
    public function getCountDoors(): int;
    public function getCountWindows(): int;
}
