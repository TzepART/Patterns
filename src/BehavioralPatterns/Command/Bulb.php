<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Command;

/**
 * Receiver
 *
 * @package Patterns\BehavioralPatterns\Command
 */
class Bulb
{
    public function turnOn(): void
    {
        echo 'Bulb has been lit'.PHP_EOL;
    }

    public function turnOff(): void
    {
        echo 'Darkness!'.PHP_EOL;
    }
}
