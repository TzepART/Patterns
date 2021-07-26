<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\CompositeV2;

class ChildLeaf implements LeafInterface
{
    use ParentTrait;

    public function __construct(private string $path)
    {}

    public function getPath(): string
    {
        return $this->path;
    }
}
