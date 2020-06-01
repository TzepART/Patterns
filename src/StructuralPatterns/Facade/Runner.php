<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Facade;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $computer = new ComputerFacade(new Computer());
        $computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
        $computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz
    }
}
