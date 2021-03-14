<?php
declare(strict_types=1);


namespace Patterns\StructuralPatterns\CompositeV2;


class ChildLeaf implements LeafInterface
{
    /**
     * @var string
     */
    private $path;

    /**
     * @var CompositeInterface
     */
    private $parent;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getParentLeaf(): CompositeInterface
    {
        return $this->parent;
    }

    public function setParent(CompositeInterface $parent): ChildLeaf
    {
        $this->parent = $parent;

        return $this;
    }
}
