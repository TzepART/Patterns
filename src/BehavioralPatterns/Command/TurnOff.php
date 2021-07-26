<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Command;

/**
 * Class TurnOff
 * @package Patterns\BehavioralPatterns\Command
 */
class TurnOff implements CommandInterface
{
    public function __construct(private Bulb $bulb)
    {}

    public function execute(): void
    {
        $this->bulb->turnOff();
    }

    public function undo(): void
    {
        $this->bulb->turnOn();
    }

    public function redo(): void
    {
        $this->execute();
    }
}
