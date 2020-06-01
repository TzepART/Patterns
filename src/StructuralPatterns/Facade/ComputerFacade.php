<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Facade;

/**
 * Facade
 *
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
    }


    public function turnOff()
    {
        $this->computer->closeEverything();
        $this->computer->pullCurrent();
        $this->computer->sooth();
    }
}
