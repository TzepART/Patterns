<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\TemplateMethod;

/**
 * @description Now create the implementation
 * @package Patterns\BehavioralPatterns\TemplateMethod
 */
class AndroidAbstractBuilder extends AbstractTemplateBuilder
{
    public function test(): void
    {
        echo 'Running android tests' . PHP_EOL;
    }

    public function lint(): void
    {
        echo 'Linting the android code' . PHP_EOL;
    }

    public function assemble(): void
    {
        echo 'Assembling the android build' . PHP_EOL;
    }

    public function deploy(): void
    {
        echo 'Deploying android build to server' . PHP_EOL;
    }
}
