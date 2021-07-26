<?php

declare(strict_types=1);

namespace Patterns\StructuralPatterns\Proxy;

/**
 * @package Patterns\StructuralPatterns\Proxy
 */
interface SecurityProxyInterface
{
    public function open(string $password);
    public function authenticate(string $password): bool;
    public function close(): void;
}