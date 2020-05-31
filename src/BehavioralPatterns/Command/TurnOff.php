<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Command;

/**
 * Class TurnOff
 * @package Patterns\BehavioralPatterns\Command
 */
class TurnOff implements CommandInterface
{
    /**
     * @var Bulb
     */
    protected $bulb;

    /**
     * TurnOff constructor.
     * @param Bulb $bulb
     */
    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->bulb->turnOff();
    }

    /**
     * @return mixed|void
     */
    public function undo()
    {
        $this->bulb->turnOn();
    }

    /**
     * @return mixed|void
     */
    public function redo()
    {
        $this->execute();
    }
}
