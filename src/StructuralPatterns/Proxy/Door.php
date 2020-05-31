<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Proxy;

/**
 * Interface Door
 * @package Patterns\StructuralPatterns\Proxy
 */
interface Door
{
    /**
     * @return mixed
     */
    public function open();

    /**
     * @return mixed
     */
    public function close();
}
