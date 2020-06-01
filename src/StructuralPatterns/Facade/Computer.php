<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Facade;

/**
 * Class Computer
 * @package Patterns\StructuralPatterns\Facade
 */
class Computer
{

    public function getElectricShock()
    {
        echo 'Ouch!' . PHP_EOL;
    }


    public function makeSound()
    {
        echo 'Beep beep!' . PHP_EOL;
    }


    public function showLoadingScreen()
    {
        echo 'Loading..' . PHP_EOL;
    }


    public function bam()
    {
        echo 'Ready to be used!' . PHP_EOL;
    }


    public function closeEverything()
    {
        echo 'Bup bup bup buzzzz!' . PHP_EOL;
    }


    public function sooth()
    {
        echo 'Zzzzz' . PHP_EOL;
    }


    public function pullCurrent()
    {
        echo 'Haaah!' . PHP_EOL;
    }
}
