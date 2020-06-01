<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\AbstractFactory;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        // Door Factory
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
    }
}
