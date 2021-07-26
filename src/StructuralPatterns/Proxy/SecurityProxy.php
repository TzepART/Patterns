<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Proxy;

/**
 * @description Make a "proxy", so that the door can perform a protective function
 * @package Patterns\StructuralPatterns\Proxy
 */
class SecurityProxy implements SecurityProxyInterface
{
    public function __construct(private DoorInterface $door)
    {}

    public function open(string $password)
    {
        if ($this->authenticate(password: $password)) {
            $this->door->open();
        } else {
            echo "Big no! It isn't possible." . PHP_EOL;
        }
    }

    public function authenticate(string $password): bool
    {
        return $password === '$ecr@t';
    }

    public function close(): void
    {
        $this->door->close();
    }
}
