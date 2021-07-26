<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Decorator;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $someCoffee = new SimpleCoffee();
        echo $someCoffee->getFormattedCost() . PHP_EOL; // Cost - 10
        echo $someCoffee->getDescription() . PHP_EOL; // Simple CoffeeInterface


        $someCoffee = new MilkCoffeeDecorator(coffee: $someCoffee);
        echo $someCoffee->getFormattedCost() . PHP_EOL; // Cost - 12
        echo $someCoffee->getDescription() . PHP_EOL; // Simple CoffeeInterface, milk


        $someCoffee = new WhipCoffeeDecorator(coffee: $someCoffee);
        echo $someCoffee->getFormattedCost() . PHP_EOL; // Cost - 17
        echo $someCoffee->getDescription() . PHP_EOL; // Simple CoffeeInterface, milk, whip

        $someCoffee = new VanillaCoffeeDecorator(coffee: $someCoffee);
        echo $someCoffee->getFormattedCost() . PHP_EOL; // Cost - 20
        echo $someCoffee->getDescription() . PHP_EOL; // Simple CoffeeInterface, milk, whip, vanilla
    }
}
