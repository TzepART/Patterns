<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\TemplateMethod;

/**
 * @description The first. Our the base class defines the framework of the build algorithm
 * @package Patterns\BehavioralPatterns\TemplateMethod
 */
abstract class AbstractTemplateBuilder implements PipelineInterface
{
    final public function build()
    {
        $this->test();
        $this->lint();
        $this->assemble();
        $this->deploy();
    }
}
