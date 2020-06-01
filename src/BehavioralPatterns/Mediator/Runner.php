<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Mediator;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * The simplest example: chat ("Mediator"), in which users ("colleagues") send messages to each other.
         * Using
         */
        $mediator = new ChatRoomInterface();

        $john = new User('John Doe', $mediator);
        $jane = new User('Jane Doe', $mediator);

        $john->send('Hi there!');
        $jane->send('Hey!');

        /**
         * OUTPUT
         * Feb 14, 10:58 [John]: Hi there!
         * Feb 14, 10:58 [Jane]: Hey!
        */
    }
}
