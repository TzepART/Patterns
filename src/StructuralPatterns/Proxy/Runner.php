<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Proxy;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $door = new SecurityProxy(door: new SecretDoor());

        $door->open(password: 'invalid password'); // Big no! It ain't possible.

        $door->open(password: '$ecr@t'); // Opening secret door

        $door->close(); // Closing secret door
    }
}
