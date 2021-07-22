<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\FactoryMethod;

/**
 * Class Saw
 */
class Saw extends Tool
{
    public function makeAction(): void
    {
        echo "Vzhzhzhzh!!!" . PHP_EOL;
    }
}
