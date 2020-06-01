<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\FactoryMethod;

/**
 * Class Saw
 */
class Saw extends Tool
{
    /**
     * @return mixed|void
     */
    public function makeAction()
    {
        echo "Vzhzhzhzh!!!" . PHP_EOL;
    }

}
