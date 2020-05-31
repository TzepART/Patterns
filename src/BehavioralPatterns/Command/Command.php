<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 17/07/2018
 * Time: 19:13
 */

namespace Patterns\BehavioralPatterns\Command;

//Example

// Receiver
/**
 * Class Bulb
 * @package Patterns\BehavioralPatterns\Command
 */
class Bulb
{
    /**
     *
     */
    public function turnOn()
    {
        echo "Bulb has been lit";
        echo "\n";
    }

    /**
     *
     */
    public function turnOff()
    {
        echo "Darkness!";
        echo "\n";
    }
}

/**
 * Interface Command
 * @package Patterns\BehavioralPatterns\Command
 */
interface Command
{
    /**
     * @return mixed
     */
    public function execute();

    /**
     * @return mixed
     */
    public function undo();

    /**
     * @return mixed
     */
    public function redo();
}

// Command

/**
 * Class TurnOn
 * @package Patterns\BehavioralPatterns\Command
 */
class TurnOn implements Command
{
    /**
     * @var Bulb
     */
    protected $bulb;

    /**
     * TurnOn constructor.
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
        $this->bulb->turnOn();
    }

    /**
     * @return mixed|void
     */
    public function undo()
    {
        $this->bulb->turnOff();
    }

    /**
     * @return mixed|void
     */
    public function redo()
    {
        $this->execute();
    }
}

/**
 * Class TurnOff
 * @package Patterns\BehavioralPatterns\Command
 */
class TurnOff implements Command
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

// Invoker
/**
 * Class RemoteControl
 * @package Patterns\BehavioralPatterns\Command
 */
class RemoteControl
{
    /**
     * @param Command $command
     */
    public function submit(Command $command)
    {
        $command->execute();
    }
}

//Using
$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Bulb has been lit!
$remote->submit($turnOff); // Darkness!
