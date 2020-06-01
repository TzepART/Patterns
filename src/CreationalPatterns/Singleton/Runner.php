<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\Singleton;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $president1 = MainBoss::getInstance();
        $president2 = MainBoss::getInstance();

        var_dump($president1 === $president2); // true
    }
}
