<?php
declare(strict_types=1);


namespace Patterns\StructuralPatterns\CompositeV2;


class ParentLeaf implements CompositeInterface, LeafInterface
{
    /**
     * @var CompositeInterface|null
     */
    private $parent;

    /**
     * @var array
     */
    private $children = [];

    /**
     * @var string
     */
    private $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

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

    public function getParentLeaf(): ?CompositeInterface
    {
        return $this->parent;
    }

    public function setParent(CompositeInterface $parent): self
    {
        $this->parent = $parent;

        return $this;
    }
}
