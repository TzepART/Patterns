<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\TemplateMethod;

/**
 * The first. Our the base class defines the framework of the build algorithm
 *
 * Class Builder
 * @package Patterns\BehavioralPatterns\TemplateMethod
 */
abstract class AbstractBuilder
{
    final public function build()
    {
        $this->test();
        $this->lint();
        $this->assemble();
        $this->deploy();
    }

    /**
     * @return mixed
     */
    abstract public function test();

    /**
     * @return mixed
     */
    abstract public function lint();

    /**
     * @return mixed
     */
    abstract public function assemble();

    /**
     * @return mixed
     */
    abstract public function deploy();
}
