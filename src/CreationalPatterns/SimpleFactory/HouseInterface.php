<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\SimpleFactory;

/**
 * Interface HouseInterface
 */
interface HouseInterface
{
    /**
     * @return mixed
     */
    public function getCountDoors();

    /**
     * @return mixed
     */
    public function getCountWindows();
}
