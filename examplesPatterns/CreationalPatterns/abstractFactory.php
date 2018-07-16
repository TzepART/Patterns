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
/**
 * Interface DoorInterface
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
interface DoorInterface
{
    /**
     * @return mixed
     */
    public function getDescription();
}

/**
 * Class PlasticDoor
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class PlasticDoor implements DoorInterface
{
    /**
     * @return mixed|void
     */
    public function getDescription()
    {
        echo 'I am a plastic door';
    }
}

/**
 * Class IronDoor
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class IronDoor implements DoorInterface
{
    /**
     * @return mixed|void
     */
    public function getDescription()
    {
        echo 'I am an iron door';
    }
}

//The second classes set

/**
 * Interface DoorFittingExpert
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
interface DoorFittingExpert
{
    /**
     * @return mixed
     */
    public function getDescription();
}

/**
 * Class PlasticMaster
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class PlasticMaster implements DoorFittingExpert
{
    /**
     * @return mixed|void
     */
    public function getDescription()
    {
        echo 'I can only plastic wooden doors';
    }
}

/**
 * Class Welder
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class Welder implements DoorFittingExpert
{
    /**
     * @return mixed|void
     */
    public function getDescription()
    {
        echo 'I can only fit iron doors';
    }
}


//Create Abstract Factory

/**
 * Interface DoorAbstractFactory
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
interface DoorAbstractFactory
{
    /**
     * @return DoorInterface
     */
    public function makeDoor(): DoorInterface;

    /**
     * @return DoorFittingExpert
     */
    public function makeFittingExpert(): DoorFittingExpert;
}

// Factory for creating plastic door and master by plastic door

/**
 * Class PlasticDoorFactory
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class PlasticDoorFactory implements DoorAbstractFactory
{
    /**
     * @return DoorInterface
     */
    public function makeDoor(): DoorInterface
    {
        return new PlasticDoor();
    }

    /**
     * @return DoorFittingExpert
     */
    public function makeFittingExpert(): DoorFittingExpert
    {
        return new PlasticMaster();
    }
}

// Factory for creating iron door and master by iron door

/**
 * Class IronDoorFactory
 * @package Patterns\CreationalPatterns\AbstractFactory
 */
class IronDoorFactory implements DoorAbstractFactory
{
    /**
     * @return DoorInterface
     */
    public function makeDoor(): DoorInterface
    {
        return new IronDoor();
    }

    /**
     * @return DoorFittingExpert
     */
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