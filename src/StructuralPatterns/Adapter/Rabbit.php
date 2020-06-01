<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

/**
 * Create rabbit. It does not implement BearInterface interface, but the hunter can hunt the rabbit
 *
 * Class Rabbit
 * @package Patterns\StructuralPatterns\Adapter
 */
class Rabbit
{
    public function squeak()
    {
    }
}
