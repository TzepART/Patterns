<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 17/07/2018
 * Time: 19:13
 */

namespace Patterns\BehavioralPatterns\Command;

/*
 * Вкратце
 * Шаблон «Команда» позволяет инкапсулировать действия в объекты. Ключевая идея — предоставить средства
 * отделения клиента от получателя.
 * Или
 * В шаблоне «Команда» объект используется для инкапсуляции всей информации, необходимой для выполнения
 * действия либо для его инициирования позднее. Информация включает в себя имя метода; объект, владеющий
 * методом; значения параметров метода.
 *
 * Команда является поведенческим шаблоном, в котором объект используется для инкапсуляции всей информации,
 * необходимой для выполнения действия или вызова события в более позднее время. Эта информация включает в себя
 * имя метода, объект, который является владельцем метода и значения параметров метода.
 * Четыре термина всегда связанны с шаблоном Команда:
 * - команды (command),
 * - приёмник команд (receiver),
 * - вызывающий команды (invoker)
 * - клиент (client).
 * Объект Command знает о приёмнике и вызывает метод приемника. Значения параметров приёмника
 * сохраняются в команде. Вызывающий объект (invoker) знает, как выполнить команду и, возможно, делает учёт и
 * запись выполненных команд. Вызывающий объект (invoker) ничего не знает о конкретной команде, он знает только
 * об интерфейсе. Оба объекта (вызывающий объект и несколько объектов команд) принадлежат объекту клиента (client).
 * Клиент решает, какие команды выполнить и когда. Чтобы выполнить команду он передает объект команды вызывающему
 * объекту (invoker).
 */

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