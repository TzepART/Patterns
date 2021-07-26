<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Command;

/**
 * @package Patterns\BehavioralPatterns\Command
 */
class TurnOn implements CommandInterface
{
    public function __construct(private Bulb $bulb)
    {}

    public function execute(): void
    {
        $this->bulb->turnOn();
    }

    public function undo(): void
    {
        $this->bulb->turnOff();
    }

    public function redo(): void
    {
        $this->execute();
    }
}
