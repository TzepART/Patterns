<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Proxy;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $door = new Security(new SecretDoor());
        $door->open('invalid'); // Big no! It ain't possible.

        $door->open('$ecr@t'); // Opening secret door
        $door->close(); // Closing secret door
    }
}
