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
        $mediator = new ChatRoom();

        $john = new User(name: 'John Doe', chatMediator: $mediator);
        $jane = new User(name: 'Jane Doe', chatMediator: $mediator);

        // OUTPUT
        // Feb 14, 10:58 [John]: Hi there!
        // Feb 14, 10:58 [Jane]: Hey!
        $john->send('Hi there!');
        $jane->send('Hey!');

    }
}
