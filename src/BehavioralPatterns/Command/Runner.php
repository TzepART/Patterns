<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Command;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $bulb = new Bulb();

        $turnOn = new TurnOn($bulb);
        $turnOff = new TurnOff($bulb);

        $remote = new RemoteControl();
        $remote->submit($turnOn); // Bulb has been lit!
        $remote->submit($turnOff); // Darkness!
    }
}
