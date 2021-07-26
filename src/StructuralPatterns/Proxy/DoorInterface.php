<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Proxy;

/**
 * @description Create interface Door and SecretDoor that implements interface
 * @package Patterns\StructuralPatterns\Proxy
 */
interface DoorInterface
{
    public function open(): void;
    public function close(): void;
}
