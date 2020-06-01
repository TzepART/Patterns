<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Proxy;

/**
 * Create interface Door and SecretDoor that implements interface
 *
 * Interface Door
 * @package Patterns\StructuralPatterns\Proxy
 */
interface DoorInterface
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
