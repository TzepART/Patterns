<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Command;

/**
 * Receiver
 *
 * Class Bulb
 * @package Patterns\BehavioralPatterns\Command
 */
class Bulb
{
    public function turnOn(): void
    {
        echo "Bulb has been lit";
        echo "\n";
    }

    public function turnOff(): void
    {
        echo "Darkness!";
        echo "\n";
    }
}
