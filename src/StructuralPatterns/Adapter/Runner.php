<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * Now hunter can hunt bear and rabbit
         */
        $rabbit = new Rabbit();
        $rabbitAdapter = new RabbitAdapter($rabbit);

        $hunter = new Hunter();
        $hunter->hunt($rabbitAdapter);
    }
}
