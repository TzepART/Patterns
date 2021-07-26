<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\TemplateMethod;

/**
 * @package Patterns\BehavioralPatterns\TemplateMethod
 */
class IosAbstractBuilder extends AbstractTemplateBuilder
{
    public function test(): void
    {
        echo 'Running ios tests' . PHP_EOL;
    }

    public function lint(): void
    {
        echo 'Linting the ios code' . PHP_EOL;
    }

    public function assemble(): void
    {
        echo 'Assembling the ios build' . PHP_EOL;
    }

    public function deploy(): void
    {
        echo 'Deploying ios build to server' . PHP_EOL;
    }
}
