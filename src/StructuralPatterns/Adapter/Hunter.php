<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

/**
 * Now create hunter who hunts any type of bears
 *
 * Class Hunter
 * @package Patterns\StructuralPatterns\Adapter
 */
class Hunter
{
    /**
     * @param BearInterface $bear
     */
    public function hunt(BearInterface $bear)
    {
    }
}
