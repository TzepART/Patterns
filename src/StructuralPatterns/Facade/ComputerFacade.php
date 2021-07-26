<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Facade;

/**
 * Facade
 *
 * Class ComputerFacade
 * @package Patterns\StructuralPatterns\Facade
 */
class ComputerFacade implements ComputerFacadeInterface
{
    /**
     * ComputerFacade constructor.
     */
    public function __construct(private ComputerInterface $computer)
    {}

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
