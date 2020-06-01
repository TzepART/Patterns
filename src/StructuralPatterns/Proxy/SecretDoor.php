<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Proxy;

/**
 * Class SecretDoor
 * @package Patterns\StructuralPatterns\Proxy
 */
class SecretDoor implements DoorInterface
{
    /**
     * @return mixed|void
     */
    public function open()
    {
        echo "Opening secret door" . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function close()
    {
        echo "Closing the secret door" . PHP_EOL;
    }
}
