<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Facade;

/**
 * Class Computer
 * @package Patterns\StructuralPatterns\Facade
 */
class Computer implements ComputerInterface
{
    public function getElectricShock(): void
    {
        echo 'Ouch!' . PHP_EOL;
    }

    public function makeSound(): void
    {
        echo 'Beep beep!' . PHP_EOL;
    }

    public function showLoadingScreen(): void
    {
        echo 'Loading..' . PHP_EOL;
    }

    public function bam(): void
    {
        echo 'Ready to be used!' . PHP_EOL;
    }

    public function closeEverything(): void
    {
        echo 'Bup bup bup buzzzz!' . PHP_EOL;
    }

    public function sooth(): void
    {
        echo 'Zzzzz' . PHP_EOL;
    }

    public function pullCurrent(): void
    {
        echo 'Haaah!' . PHP_EOL;
    }
}
