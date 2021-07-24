<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

interface ComponentInterface
{
    public function getName(): string;
    public function getPath(): string;
    public function getBasePath(): string;
}