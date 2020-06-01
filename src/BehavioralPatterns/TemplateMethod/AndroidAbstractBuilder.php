<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\TemplateMethod;

/**
 * Now create the implementation
 *
 * Class AndroidBuilder
 * @package Patterns\BehavioralPatterns\TemplateMethod
 */
class AndroidAbstractBuilder extends AbstractBuilder
{
    /**
     * @return mixed|void
     */
    public function test()
    {
        echo 'Running android tests' . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function lint()
    {
        echo 'Linting the android code' . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function assemble()
    {
        echo 'Assembling the android build' . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function deploy()
    {
        echo 'Deploying android build to server' . PHP_EOL;
    }
}
