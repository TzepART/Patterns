<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\CompositeV2;

class ParentLeaf implements CompositeInterface, LeafInterface
{
    use ParentTrait;

    private array $children = [];

    public function __construct(private string $path)
    {}

    public function addLeaf(LeafInterface $leaf): self
    {
        $leaf->setParent($this);
        $this->children[] = $leaf;

        return $this;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}
