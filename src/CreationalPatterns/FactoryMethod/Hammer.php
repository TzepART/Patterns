<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\FactoryMethod;

/**
 * Class Hammer
 */
class Hammer extends Tool
{
    public function makeAction(): void
    {
        echo "Bam Bam Bam!!!" . PHP_EOL;
    }
}
