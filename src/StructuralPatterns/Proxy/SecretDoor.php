<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Proxy;

/**
 * @package Patterns\StructuralPatterns\Proxy
 */
class SecretDoor implements DoorInterface
{
    public function open(): void
    {
        echo "Opening secret door" . PHP_EOL;
    }

    public function close(): void
    {
        echo "Closing the secret door" . PHP_EOL;
    }
}
