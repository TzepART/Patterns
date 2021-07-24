<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

/**
 * Class Component
 */
abstract class AbstractComponent implements ComponentInterface
{
    protected string $basePath = '';

    public function __construct(protected string $name){}

    public function getBasePath(): string
    {
        return $this->basePath;
    }
}
