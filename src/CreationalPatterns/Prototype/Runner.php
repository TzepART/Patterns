<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\Prototype;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $original = new Sheep('Jolly');
        echo $original->getName() . PHP_EOL; // Jolly
        echo $original->getCategory() . PHP_EOL; // Mountain Sheep

        /**
         * Clone and modify, what you want
         */
        $cloned = clone $original;
        $cloned->setName('Dolly');
        echo $cloned->getName() . PHP_EOL; // Dolly
        echo $cloned->getCategory() . PHP_EOL; // Mountain Sheep
    }
}
