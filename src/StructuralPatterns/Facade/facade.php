<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 17/07/2018
 * Time: 00:02
 */

namespace Patterns\StructuralPatterns\Facade;

/*
 * Вкратце
 * Шаблон «Фасад» предоставляет упрощённый интерфейс для сложной подсистемы.
 * Шаблон фасад (англ. Facade) — структурный шаблон проектирования, позволяющий скрыть сложность системы путём
 * сведения всех возможных внешних вызовов к одному объекту, делегирующему их соответствующим объектам системы.
 */

//Example
//Step 1. Create class Computer
/**
 * Class Computer
 * @package Patterns\StructuralPatterns\Facade
 */
class Computer
{

    public function getElectricShock()
    {
        echo "Ouch!";
    }


    public function makeSound()
    {
        echo "Beep beep!";
    }


    public function showLoadingScreen()
    {
        echo "Loading..";
    }


    public function bam()
    {
        echo "Ready to be used!";
    }


    public function closeEverything()
    {
        echo "Bup bup bup buzzzz!";
    }


    public function sooth()
    {
        echo "Zzzzz";
    }


    public function pullCurrent()
    {
        echo "Haaah!";
    }
}

//Step 2. Now create Facade

/**
 * Class ComputerFacade
 * @package Patterns\StructuralPatterns\Facade
 */
class ComputerFacade
{
    /**
     * @var Computer
     */
    protected $computer;

    /**
     * ComputerFacade constructor.
     * @param Computer $computer
     */
    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }


    public function turnOn()
    {
        $this->computer->getElectricShock();
        $this->computer->makeSound();
        $this->computer->showLoadingScreen();
        $this->computer->bam();
        echo PHP_EOL;
    }


    public function turnOff()
    {
        $this->computer->closeEverything();
        $this->computer->pullCurrent();
        $this->computer->sooth();
        echo PHP_EOL;
    }
}

//Step 3. Using
$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz
