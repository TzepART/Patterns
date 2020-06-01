<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\FactoryMethod;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /** @var Hammer $hammer */
        $hammer = Tool::initial(Hammer::class);
        /** @var Saw $saw */
        $saw = Tool::initial(Saw::class);

        $hammer->makeAction();
        $saw->makeAction();
    }
}
