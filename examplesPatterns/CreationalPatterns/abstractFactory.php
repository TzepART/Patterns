<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 13/07/2018
 * Time: 16:19
 */

namespace Patterns\CreationalPatterns\AbstractFactory;

/*
 * Вкратце
 * Это фабрика фабрик. То есть фабрика, группирующая индивидуальные, но взаимосвязанные/взаимозависимые фабрики
 * без указания для них конкретных классов.
 *
 * Когда использовать?
 * Когда у вас есть взаимосвязи с не самой простой логикой создания (creation logic).
 */

//The first classes set
interface DoorInterface
{
    public function getDescription();
}

class PlasticDoor implements DoorInterface
{
    public function getDescription()
    {
        echo 'I am a plastic door';
    }
}

class IronDoor implements DoorInterface
{
    public function getDescription()
    {
        echo 'I am an iron door';
    }
}

//The second classes set
interface DoorFittingExpert
{
    public function getDescription();
}

class PlasticMaster implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only plastic wooden doors';
    }
}

class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only fit iron doors';
    }
}


//Create Abstract Factory
interface DoorAbstractFactory
{
    public function makeDoor(): DoorInterface;
    public function makeFittingExpert(): DoorFittingExpert;
}

// Factory for creating plastic door and master by plastic door
class PlasticDoorFactory implements DoorAbstractFactory
{
    public function makeDoor(): DoorInterface
    {
        return new PlasticDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new PlasticMaster();
    }
}

// Factory for creating iron door and master by iron door
class IronDoorFactory implements DoorAbstractFactory
{
    public function makeDoor(): DoorInterface
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}

//Using
$plasticFactory = new PlasticDoorFactory();

$door = $plasticFactory->makeDoor();
$expert = $plasticFactory->makeFittingExpert();

$door->getDescription();  // Output: I'm plastic door
$expert->getDescription(); // Output: I can only plastic wooden doors

// Same for Iron Factory
$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();

$door->getDescription();  // Output: I am an iron door
$expert->getDescription(); // Output: I can only fit iron doors