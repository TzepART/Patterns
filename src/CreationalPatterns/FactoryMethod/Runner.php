<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\FactoryMethod;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $hammer = Tool::initial(toolClass: Hammer::class);
        $saw = Tool::initial(toolClass: Saw::class);

        $hammer->makeAction();
        $saw->makeAction();
    }
}
