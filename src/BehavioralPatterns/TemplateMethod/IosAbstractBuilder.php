<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\TemplateMethod;

/**
 * Class IosBuilder
 * @package Patterns\BehavioralPatterns\TemplateMethod
 */
class IosAbstractBuilder extends AbstractBuilder
{
    /**
     * @return mixed|void
     */
    public function test()
    {
        echo 'Running ios tests' . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function lint()
    {
        echo 'Linting the ios code' . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function assemble()
    {
        echo 'Assembling the ios build' . PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function deploy()
    {
        echo 'Deploying ios build to server' . PHP_EOL;
    }
}
