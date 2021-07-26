<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\TemplateMethod;

/**
 * @package Patterns\BehavioralPatterns\TemplateMethod
 */
interface PipelineInterface
{
    public function build();
    public function test(): void;
    public function lint(): void;
    public function assemble(): void;
}