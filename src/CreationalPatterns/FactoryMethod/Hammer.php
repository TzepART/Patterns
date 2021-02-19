<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\FactoryMethod;

/**
 * Class Hammer
 */
class Hammer extends Tool
{
    /**
     * @return mixed|void
     */
    public function makeAction()
    {
        echo "Bam Bam Bam!!!" . PHP_EOL;
    }
}
